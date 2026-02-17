<?php

namespace App\Http\Controllers;

use App\Models\EmailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EmailSettingController extends Controller
{
    public function index()
    {
        $settings = [
            'mail_mailer' => EmailSetting::getValue('mail_mailer') ?? 'smtp',
            'mail_host' => EmailSetting::getValue('mail_host'),
            'mail_port' => EmailSetting::getValue('mail_port'),
            'mail_username' => EmailSetting::getValue('mail_username'),
            'mail_password' => EmailSetting::getValue('mail_password'),
            'mail_encryption' => EmailSetting::getValue('mail_encryption'),
        ];
        return view('email_settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mail_mailer' => 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
        ]);

        foreach ($request->except('_token') as $key => $value) {
            EmailSetting::setValue($key, $value);
        }

        return redirect()->back()->with('success', 'Email settings saved successfully');
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
    protected $fillable = ['key', 'value'];

    public static function getValue($key)
    {
        return self::where('key', $key)->value('value');
    }

    public static function setValue($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}



@extends('masterpage.layout')
@section('title', 'Email Settings')

@section('mainConten')
<div class="dash-container">
    <div class="dash-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 class="m-b-10">{{ __('Email Settings') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('email-settings.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Mailer') }}</label>
                                        <input type="text" name="mail_mailer" class="form-control" value="{{ old('mail_mailer', $settings['mail_mailer'] ?? 'smtp') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Host') }}</label>
                                        <input type="text" name="mail_host" class="form-control" value="{{ old('mail_host', $settings['mail_host'] ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Port') }}</label>
                                        <input type="text" name="mail_port" class="form-control" value="{{ old('mail_port', $settings['mail_port'] ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Username') }}</label>
                                        <input type="text" name="mail_username" class="form-control" value="{{ old('mail_username', $settings['mail_username'] ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Password') }}</label>
                                        <input type="password" name="mail_password" class="form-control" value="{{ old('mail_password', $settings['mail_password'] ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Mail Encryption') }}</label>
                                        <select name="mail_encryption" class="form-control">
                                            <option value="tls" {{ (old('mail_encryption', $settings['mail_encryption'] ?? '') == 'tls') ? 'selected' : '' }}>TLS</option>
                                            <option value="ssl" {{ (old('mail_encryption', $settings['mail_encryption'] ?? '') == 'ssl') ? 'selected' : '' }}>SSL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">{{ __('Save Settings') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<?php

namespace App\Providers;

use App\Models\EmailSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        try {
            Config::set('mail.mailers.smtp.host', EmailSetting::getValue('mail_host'));
            Config::set('mail.mailers.smtp.port', EmailSetting::getValue('mail_port'));
            Config::set('mail.mailers.smtp.username', EmailSetting::getValue('mail_username'));
            Config::set('mail.mailers.smtp.password', EmailSetting::getValue('mail_password'));
            Config::set('mail.mailers.smtp.encryption', EmailSetting::getValue('mail_encryption'));
        } catch (\Exception $e) {
            // Table might not exist yet
        }
    }
}





<?php

namespace App\Http\Controllers;

use App\Models\EmailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EmailSettingController extends Controller
{
    public function index()
    {
        $settings = EmailSetting::first();
        return view('email_settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mail_mailer' => 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'nullable|in:tls,ssl',
        ]);

        $settings = EmailSetting::first();
        $data = $request->only(['mail_mailer','mail_host','mail_port','mail_username','mail_password','mail_encryption']);
        $data['admin_id'] = auth()->id();

        if ($settings) {
            $settings->update($data);
        } else {
            EmailSetting::create($data);
        }

        $this->setMailConfig();

        return redirect()->back()->with('success', 'Email settings saved successfully');
    }

    private function setMailConfig()
    {
        $settings = EmailSetting::first();
        
        if ($settings) {
            Config::set('mail.default', $settings->mail_mailer);
            Config::set('mail.mailers.smtp.host', $settings->mail_host);
            Config::set('mail.mailers.smtp.port', $settings->mail_port);
            Config::set('mail.mailers.smtp.username', $settings->mail_username);
            Config::set('mail.mailers.smtp.password', $settings->mail_password);
            $scheme = ($settings->mail_encryption === 'ssl') ? 'smtps' : 'smtp';
            Config::set('mail.mailers.smtp.scheme', $scheme);
        }
    }
}

