# Card Management System - AI-Ready Project Specification

## Project Overview
A comprehensive card management system for issuing, managing, and tracking virtual/physical payment cards with integrated email notifications (SMTP), Slack alerts, PayPal payment processing, and administrative controls.

<!-- ## AI Implementation Instructions
This document is structured to enable AI-assisted project creation. Each section contains:
- Exact file paths and names
- Complete code structure requirements
- Database schema definitions
- API endpoint specifications
- Integration configurations

### Quick Start for AI
1. Read entire specification
2. Create Laravel backend structure first
3. Implement database migrations
4. Build API endpoints
5. Create React frontend
6. Integrate third-party services
7. Implement security features -->

---

## 1. USER SIDE FEATURES

### 1.1 User Authentication & Profile
- **Registration**
  - Email, password, phone number
  - KYC verification (ID upload, address proof)
  - Email verification
- **Login/Logout**
  - Two-factor authentication (2FA)
  - Password reset via email
- **Profile Management**
  - Update personal information
  - Change password
  - Upload profile picture
  - Manage notification preferences

### 1.2 Card Management
- **Request New Card**
  - Choose card type (Virtual/Physical)
  - Select card category (Debit/Credit/Prepaid)
  - Set spending limits
  - Choose delivery address (for physical cards)
  - Pay card issuance fee via payment gateway
- **View Cards**
  - List all active/inactive cards
  - Card details (masked number, expiry, CVV reveal)
  - Card balance and available credit
  - Card status (Active, Blocked, Expired)
- **Card Controls**
  - Activate/Deactivate card
  - Block/Unblock card temporarily
  - Set transaction limits (daily/monthly)
  - Enable/disable online transactions
  - Enable/disable international transactions
  - Enable/disable contactless payments
- **Card Replacement**
  - Request replacement card
  - Pay replacement fee

### 1.3 Transactions
- **Transaction History**
  - View all transactions with filters (date, amount, merchant)
  - Search transactions
  - Export transaction history (PDF)
  - Transaction categories (Shopping, Food, Travel, etc.)
- **Transaction Details**
  - Merchant name and location
  - Transaction amount and currency
  - Transaction status (Success, Failed, Pending)
  - Receipt download

### 1.4 Payments & Recharge
- **Add Money to Card**
  - PayPal payment integration only
- **Payment Methods**
  - Save PayPal payment method

### 1.5 Notifications
- **Email Notifications (SMTP Only)**
  - Welcome email on user registration

### 1.6 Security
- **PIN Management**
  - Set/Change card PIN
  - Reset PIN
---

## 2. ADMIN SIDE FEATURES

### 2.1 Admin Authentication
- **Login/Logout**
  - Secure admin login
  - Role-based access control
  - Session management
- **Admin Roles**
  - Super Admin
  - Card Manager

### 2.2 Dashboard
- **Overview Statistics**
  - Total users
  - Total cards issued (Virtual/Physical)
  - Active/Inactive cards
  - Total transactions (today/week/month)
  - Revenue generated
  - Pending card requests
  - Pending disputes
- **Charts & Analytics**
  - Card issuance trends
  - Revenue charts
  - User growth analytics
  - Geographic distribution

### 2.3 User Management
- **View All Users**
  - Search and filter users
  - User status (Active, Suspended, Banned)
  - KYC verification status
- **User Details**
  - Personal information
  - KYC documents review
  - Card history
  - Transaction history
  - Account balance
- **User Actions**
  - Approve/Reject KYC
  - Suspend/Activate user account
  - Reset user password
  - View user activity logs
  -Request replacement card

### 2.4 Card Management
- **View All Cards**
  - Filter by status, type, user
  - Search by card number or user
- **Card Requests**
  - Approve/Reject new card requests
  - Approve/Reject replacement requests
  - Set priority for physical card delivery
- **Card Actions**
  - Activate/Deactivate cards
  - Block/Unblock cards
  - Set card limits
  - Extend card expiry
  - Cancel cards

### 2.5 Transaction Management
- **View All Transactions**
  - Real-time transaction monitoring
  - Filter by date, amount, status, user
  - Search transactions
  - Export transaction reports
- **Transaction Details**
  - Complete transaction information
  - User and card details
  - Merchant information
  - Transaction logs

### 2.6 Payment Management
- **Payment Gateway Settings**
  - Configure payment providers
  - API key management
- **Revenue Management**
  - View total revenue
  - Card issuance fees collected
  - Transaction fees collected
  - Replacement fees collected

### 2.7 Notifications Management
- **Email Notifications (SMTP Only)**
  - Configure SMTP settings
  - Configure welcome email template
- **Slack Notifications**
  - Configure Slack webhooks
  - Alert trigger: New card requests only
  - Channel management

### 2.8 Reports & Analytics
- **Financial Reports**
  - Revenue reports (daily/weekly/monthly)
  - Transaction reports
  - Fee collection reports
- **User Reports**
  - User registration trends
  - Active users report
  - KYC approval rates
- **Card Reports**
  - Card issuance reports
  - Card activation rates
  - Card usage statistics
  - Blocked/Cancelled cards report
- **Custom Reports**
  - Report builder with filters
  - Schedule automated reports
  - Export in multiple formats (Excel)

### 2.9 Settings & Configuration
- **System Settings**
  - Card issuance fees
  - Transaction fees
  - Spending limits (default/maximum)
  - Card validity period
- **Integration Settings**
  - Payment gateway configuration
  - Email service (SMTP only)
  - Slack integration
  - Card issuer API

---

## 3. TECHNICAL FEATURES

### 3.1 Email Integration (SMTP Only)
- Welcome email on user registration
- **SMTP Configuration**
  - Custom SMTP server settings
  - Host, port, encryption (TLS/SSL)
  - Authentication credentials
  - From address configuration

### 3.2 Slack Integration
- Real-time alerts for admins:
  - New card requests only
- **Alert Channels**
  - #card-requests: New card applications only
- **Alert Format**
  - Rich formatting with action buttons
  - Direct links to admin panel
  - User and card request details
  - Timestamp and priority indicators
- **Configuration**
  - Webhook URL setup
  - Channel selection
  - Alert customization
  - Test notification feature

### 3.3 Payment Gateway Integration
- **PayPal**
  - PayPal account payments
  - Credit/Debit card processing
  - International payments
  - Secure checkout
  - Express checkout
  - Webhook handling
  - Payment method tokenization
  - Multi-currency support

### 3.4 Input Types Used
- Text inputs (name, email, address)
- Password inputs (with strength meter)
- Number inputs (amount, limits, PIN)
- Email inputs (with validation)
- Phone inputs (with country code)
- Date inputs (DOB, expiry date)
- File uploads (KYC documents, profile picture)
- Dropdown/Select (card type, country, category)
- Radio buttons (card preference)
- Checkboxes (terms, notification preferences)
- Toggle switches (card controls)
- Range sliders (spending limits)
- Search inputs (transaction search)
- Textarea (dispute description, notes)
- OTP inputs (verification codes)

### 3.5 Security Features
- SSL/TLS encryption
- Two-factor authentication (2FA)
- Session management
- Password hashing (bcrypt)
- CSRF protection
- XSS prevention
- SQL injection prevention
- Rate limiting
- IP whitelisting for admin
- Secure PIN storage
- OTP verification
- Card data encryption
- PCI DSS compliance
- Audit trail logging

---

## 4. DATABASE STRUCTURE

### 4.1 Complete Schema Definitions

#### users table
```sql
id, name, email, password, phone, profile_picture, email_verified_at, two_factor_enabled, two_factor_secret, status (active/suspended/banned), created_at, updated_at
```

#### admin_users table
```sql
id, name, email, password, role_id, last_login, created_at, updated_at
```

#### roles table
```sql
id, name (super_admin/card_manager), permissions (json), created_at, updated_at
```

#### cards table
```sql
id, user_id, card_number (encrypted), card_type (virtual/physical), card_category (debit/credit/prepaid), expiry_date, cvv (encrypted), pin (hashed), balance, credit_limit, status (active/inactive/blocked/expired), is_online_enabled, is_international_enabled, is_contactless_enabled, created_at, updated_at
```

#### card_requests table
```sql
id, user_id, card_type, card_category, delivery_address, issuance_fee, payment_status, request_status (pending/approved/rejected), admin_notes, created_at, updated_at
```

#### transactions table
```sql
id, card_id, user_id, merchant_name, merchant_location, amount, currency, transaction_type (purchase/refund/recharge), category, status (success/failed/pending), receipt_url, created_at, updated_at
```

#### disputes table
```sql
id, transaction_id, user_id, reason, description, status (open/in_progress/resolved/rejected), resolution_notes, created_at, updated_at
```

#### payments table
```sql
id, user_id, payment_gateway (paypal), amount, currency, transaction_id, status, metadata (json), created_at, updated_at
```

#### notifications table
```sql
id, user_id, type (email/slack/in_app), title, message, is_read, sent_at, created_at, updated_at
```

#### kyc_documents table
```sql
id, user_id, document_type (id/address_proof), document_path, verification_status (pending/approved/rejected), admin_notes, verified_at, created_at, updated_at
```

#### payment_methods table
```sql
id, user_id, gateway (paypal), token, is_default, metadata (json), created_at, updated_at
```

#### settings table
```sql
id, key, value, type (string/number/json), description, created_at, updated_at
```

#### card_limits table
```sql
id, card_id, daily_limit, monthly_limit, per_transaction_limit, created_at, updated_at
```

#### card_controls table
```sql
id, card_id, online_transactions, international_transactions, contactless_payments, atm_withdrawals, created_at, updated_at
```

#### promotions table
```sql
id, title, description, discount_percentage, start_date, end_date, is_active, created_at, updated_at
```

#### webhooks table
```sql
id, source (paypal/slack), event_type, payload (json), status, processed_at, created_at, updated_at
```

#### audit_logs table
```sql
id, user_id, admin_id, action, model_type, model_id, old_values (json), new_values (json), ip_address, user_agent, created_at
```

### 4.2 Key Tables Summary

- **users** - User accounts
- **admin_users** - Admin accounts
- **roles** - Admin roles
- **cards** - Card information
- **card_requests** - New card requests
- **transactions** - All transactions
- **disputes** - Transaction disputes
- **payments** - Payment records
- **notifications** - Notification logs
- **kyc_documents** - KYC verification documents
- **payment_methods** - Saved payment methods
- **settings** - System configuration
- **card_limits** - Card spending limits
- **card_controls** - Card control settings
- **promotions** - Marketing campaigns
- **webhooks** - Webhook logs configuration

---

## 5. FILE STRUCTURE

### 5.1 Laravel Backend Structure
```
react_laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── AuthController.php
│   │   │   │   ├── CardController.php
│   │   │   │   ├── TransactionController.php
│   │   │   │   ├── PaymentController.php
│   │   │   │   ├── DisputeController.php
│   │   │   │   └── ProfileController.php
│   │   │   └── Admin/
│   │   │       ├── DashboardController.php
│   │   │       ├── UserController.php
│   │   │       ├── CardManagementController.php
│   │   │       ├── TransactionController.php
│   │   │       ├── ReportController.php
│   │   │       └── SettingsController.php
│   │   ├── Middleware/
│   │   │   ├── AdminAuth.php
│   │   │   ├── TwoFactorAuth.php
│   │   │   └── RateLimiter.php
│   │   └── Requests/
│   │       ├── CardRequestRequest.php
│   │       ├── TransactionRequest.php
│   │       └── KYCRequest.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── AdminUser.php
│   │   ├── Card.php
│   │   ├── CardRequest.php
│   │   ├── Transaction.php
│   │   ├── Dispute.php
│   │   ├── Payment.php
│   │   ├── Notification.php
│   │   └── KYCDocument.php
│   ├── Services/
│   │   ├── CardService.php
│   │   ├── PaymentService.php
│   │   ├── NotificationService.php
│   │   ├── SlackService.php
│   │   └── EmailService.php
│   └── Mail/
│       └── WelcomeEmail.php
├── database/
│   ├── migrations/
│   │   ├── 2024_01_01_create_users_table.php
│   │   ├── 2024_01_02_create_cards_table.php
│   │   ├── 2024_01_03_create_transactions_table.php
│   │   └── [all other migration files]
│   └── seeders/
│       ├── AdminSeeder.php
│       └── SettingsSeeder.php
├── routes/
│   ├── api.php
│   └── web.php
└── config/
    ├── services.php (PayPal, Slack)
    └── mail.php (SMTP)
```

### 5.2 React Frontend Structure
```
resources/
├── js/
│   ├── components/
│   │   ├── User/
│   │   │   ├── Dashboard.jsx
│   │   │   ├── CardList.jsx
│   │   │   ├── CardDetails.jsx
│   │   │   ├── RequestCard.jsx
│   │   │   ├── Transactions.jsx
│   │   │   ├── AddMoney.jsx
│   │   │   └── Profile.jsx
│   │   ├── Admin/
│   │   │   ├── Dashboard.jsx
│   │   │   ├── UserManagement.jsx
│   │   │   ├── CardRequests.jsx
│   │   │   ├── TransactionMonitoring.jsx
│   │   │   ├── Reports.jsx
│   │   │   └── Settings.jsx
│   │   ├── Auth/
│   │   │   ├── Login.jsx
│   │   │   ├── Register.jsx
│   │   │   └── TwoFactorAuth.jsx
│   │   └── Common/
│   │       ├── Navbar.jsx
│   │       ├── Sidebar.jsx
│   │       └── Modal.jsx
│   ├── services/
│   │   ├── api.js
│   │   ├── authService.js
│   │   ├── cardService.js
│   │   └── paymentService.js
│   ├── utils/
│   │   ├── validation.js
│   │   └── helpers.js
│   └── App.jsx
└── css/
    └── app.css
```

---

## 6. TECHNOLOGY STACK

### Backend
- Laravel 10+ (PHP Framework)
- MySQL/PostgreSQL (Database)
- Redis (Caching & Queues)
- Laravel Sanctum (API Authentication)
- Laravel Horizon (Queue Monitoring)

### Frontend
- React (JavaScript Library)
- Tailwind CSS / Bootstrap
- Alpine.js (for interactions)
- Chart.js (Analytics)

### Integrations
- Laravel Mail with SMTP (Email notifications)
- Slack API (Notifications - New card requests only)
- PayPal SDK (Payments)
- No SMS Gateway Integration

### Development Tools
- Laravel Telescope (Debugging)
- Composer (Dependency Management)
- NPM (Package Management)
- Git (Version Control)

---

## 7. IMPLEMENTATION GUIDE

### 7.1 Environment Setup

#### .env Configuration
```env
APP_NAME="Card Management System"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=card_management
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@cardmanagement.com
MAIL_FROM_NAME="${APP_NAME}"

PAYPAL_MODE=sandbox
PAYPAL_CLIENT_ID=
PAYPAL_SECRET=

SLACK_WEBHOOK_URL=
SLACK_CARD_REQUEST_CHANNEL=#card-requests

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### 7.2 Installation Commands
```bash
# Backend setup
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan storage:link

# Frontend setup
npm install
npm run dev

# Queue worker
php artisan queue:work

# Development server
php artisan serve
```

### 7.3 Required Composer Packages
```json
{
  "require": {
    "laravel/framework": "^10.0",
    "laravel/sanctum": "^3.0",
    "paypal/rest-api-sdk-php": "^1.14",
    "guzzlehttp/guzzle": "^7.0",
    "predis/predis": "^2.0"
  },
  "require-dev": {
    "laravel/telescope": "^4.0",
    "laravel/horizon": "^5.0"
  }
}
```

### 7.4 Required NPM Packages
```json
{
  "dependencies": {
    "react": "^18.0",
    "react-dom": "^18.0",
    "react-router-dom": "^6.0",
    "axios": "^1.0",
    "chart.js": "^4.0",
    "react-chartjs-2": "^5.0",
    "tailwindcss": "^3.0"
  }
}
```

---

## 8. PROJECT PHASES

### Phase 1: Foundation (Week 1-2)
**Files to Create:**
- All database migrations (database/migrations/)
- User and AdminUser models (app/Models/)
- AuthController for both user and admin (app/Http/Controllers/Api/)
- Login/Register React components (resources/js/components/Auth/)
- API routes in routes/api.php
- Sanctum authentication setup

**Deliverables:**
- Working authentication for users and admins
- Database structure complete
- Basic React routing setup

### Phase 2: Core Features (Week 3-5)
**Files to Create:**
- Card model and CardRequest model
- CardController and CardManagementController
- CardService for business logic
- Card-related React components (CardList, CardDetails, RequestCard)
- Transaction model and controller
- PaymentService with PayPal integration

**Deliverables:**
- Users can request cards
- Admins can approve/reject requests
- Card CRUD operations
- Transaction recording
- PayPal payment integration working

### Phase 3: Notifications (Week 6)
**Files to Create:**
- NotificationService (app/Services/)
- EmailService with SMTP configuration
- SlackService for webhook integration
- WelcomeEmail mailable (app/Mail/)
- Notification model and migration

**Deliverables:**
- Welcome email on registration
- Slack alerts for new card requests
- Email configuration in admin panel

### Phase 4: Advanced Features (Week 7-8)
**Files to Create:**
- Dispute model and controller
- KYCDocument model and verification logic
- TwoFactorAuth middleware
- ReportController for analytics
- Chart components in React
- Settings management

**Deliverables:**
- Dispute management system
- KYC verification workflow
- 2FA implementation
- Reports and analytics dashboard
- Card controls (limits, restrictions)

### Phase 5: Polish & Testing (Week 9-10)
**Files to Create:**
- Test files (tests/Feature/, tests/Unit/)
- Audit logging system
- Rate limiting middleware
- Error handling components
- Documentation files

**Deliverables:**
- Complete test coverage
- Security features implemented
- Performance optimized
- Production-ready deployment

---

## 9. CODE IMPLEMENTATION EXAMPLES

### 9.1 Sample Model (Card.php)
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'user_id', 'card_number', 'card_type', 'card_category',
        'expiry_date', 'cvv', 'pin', 'balance', 'credit_limit',
        'status', 'is_online_enabled', 'is_international_enabled',
        'is_contactless_enabled'
    ];

    protected $hidden = ['card_number', 'cvv', 'pin'];

    protected $casts = [
        'is_online_enabled' => 'boolean',
        'is_international_enabled' => 'boolean',
        'is_contactless_enabled' => 'boolean',
        'balance' => 'decimal:2',
        'credit_limit' => 'decimal:2'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function limits() {
        return $this->hasOne(CardLimit::class);
    }

    public function controls() {
        return $this->hasOne(CardControl::class);
    }

    public function cardRequest() {
        return $this->belongsTo(CardRequest::class);
    }
}
```

### 9.2 Sample Controller (CardController.php)
```php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CardService;
use Illuminate\Http\Request;

class CardController extends Controller
{
    protected $cardService;

    public function __construct(CardService $cardService) {
        $this->cardService = $cardService;
    }

    public function index(Request $request) {
        $cards = $this->cardService->getUserCards($request->user()->id);
        return response()->json($cards);
    }

    public function show($id) {
        $card = $this->cardService->getCardDetails($id);
        return response()->json($card);
    }

    public function updateControls(Request $request, $id) {
        $card = $this->cardService->updateCardControls($id, $request->all());
        return response()->json($card);
    }
}
```

### 9.3 Sample React Component (CardList.jsx)
```jsx
import React, { useState, useEffect } from 'react';
import axios from 'axios';

const CardList = () => {
    const [cards, setCards] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        fetchCards();
    }, []);

    const fetchCards = async () => {
        try {
            const response = await axios.get('/api/cards');
            setCards(response.data);
        } catch (error) {
            console.error('Error fetching cards:', error);
        } finally {
            setLoading(false);
        }
    };

    return (
        <div className="card-list">
            <h2>My Cards</h2>
            {loading ? (
                <p>Loading...</p>
            ) : (
                <div className="cards-grid">
                    {cards.map(card => (
                        <div key={card.id} className="card-item">
                            <p>{card.card_type}</p>
                            <p>****{card.card_number.slice(-4)}</p>
                            <p>Balance: ${card.balance}</p>
                        </div>
                    ))}
                </div>
            )}
        </div>
    );
};

export default CardList;
```

### 9.4 Sample Service (SlackService.php)
```php
namespace App\Services;

use GuzzleHttp\Client;

class SlackService
{
    protected $webhookUrl;
    protected $client;

    public function __construct() {
        $this->webhookUrl = config('services.slack.webhook_url');
        $this->client = new Client();
    }

    public function sendCardRequestAlert($cardRequest) {
        $message = [
            'text' => 'New Card Request',
            'blocks' => [
                [
                    'type' => 'section',
                    'text' => [
                        'type' => 'mrkdwn',
                        'text' => "*New Card Request*\nUser: {$cardRequest->user->name}\nType: {$cardRequest->card_type}\nCategory: {$cardRequest->card_category}"
                    ]
                ],
                [
                    'type' => 'actions',
                    'elements' => [
                        [
                            'type' => 'button',
                            'text' => ['type' => 'plain_text', 'text' => 'View Details'],
                            'url' => config('app.url') . '/admin/card-requests/' . $cardRequest->id
                        ]
                    ]
                ]
            ]
        ];

        $this->client->post($this->webhookUrl, ['json' => $message]);
    }
}
```

### 9.5 Sample Migration
```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('card_number')->unique();
            $table->enum('card_type', ['virtual', 'physical']);
            $table->enum('card_category', ['debit', 'credit', 'prepaid']);
            $table->date('expiry_date');
            $table->string('cvv');
            $table->string('pin')->nullable();
            $table->decimal('balance', 10, 2)->default(0);
            $table->decimal('credit_limit', 10, 2)->nullable();
            $table->enum('status', ['active', 'inactive', 'blocked', 'expired'])->default('inactive');
            $table->boolean('is_online_enabled')->default(true);
            $table->boolean('is_international_enabled')->default(false);
            $table->boolean('is_contactless_enabled')->default(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('cards');
    }
};
```

---

## 10. KEY BENEFITS

### For Users
- Easy card management from anywhere
- Real-time transaction tracking
- Enhanced security controls
- Quick dispute resolution
- Secure PayPal payment integration
- Instant card activation/deactivation
- Customizable spending limits
- Transaction notifications

### For Admins
- Centralized management dashboard
- Real-time transaction monitoring
- Automated Slack notifications for card requests
- Comprehensive reporting and analytics
- Fraud detection and prevention
- KYC verification workflow
- Revenue tracking and management
- User activity audit logs

---

## 11. DEVOPS & DEPLOYMENT

### 11.1 Server Requirements
- PHP 8.1 or higher
- MySQL 8.0 or PostgreSQL 13+
- Redis 6.0+
- Composer 2.x
- Node.js 18+ & NPM
- SSL Certificate
- Minimum 2GB RAM
- 20GB SSD storage

### 11.2 Deployment Checklist
- Configure environment variables
- Run database migrations
- Set up queue workers
- Configure cron jobs
- Enable SSL/TLS
- Set up backup system
- Configure monitoring tools
- Test payment gateway integration
- Verify email delivery
- Test Slack notifications

---

## 12. PAYMENT GATEWAY INTEGRATION DETAILS

### 12.1 PayPal Integration
- **Payment Methods**
  - PayPal account payments
  - Credit/Debit card processing (Visa, Mastercard, Amex, Discover)
  - PayPal Credit
  - Venmo (US only)

- **Features**
  - Express checkout for faster payments
  - Guest checkout (no PayPal account required)
  - One-click payments for returning customers
  - Subscription and recurring billing
  - International currency support (25+ currencies)
  - Multi-currency transactions

- **Integration Methods**
  - PayPal REST API
  - PayPal SDK for PHP
  - Webhook notifications for real-time updates
  - IPN (Instant Payment Notification) backup

- **Transaction Management**
  - Instant payment confirmation
  - Refund processing (full and partial)
  - Dispute and chargeback management
  - Transaction history and reporting
  - Payment status tracking

- **Security Features**
  - PayPal Buyer Protection
  - Seller Protection
  - Fraud detection and prevention
  - Encrypted transactions
  - Two-factor authentication
  - Address verification

### 12.2 Payment Security
- PCI DSS Level 1 compliance
- No card data stored on servers
- Tokenization of payment methods
- SSL/TLS encryption
- Fraud detection algorithms
- 3D Secure authentication
- CVV validation
- Address verification system (AVS)
- Velocity checks
- IP geolocation verification

---

## 13. USER INTERFACE PAGES

### 13.1 User Pages
- Login / Register
- Dashboard (cards overview, recent transactions)
- My Cards (list and manage cards)
- Card Details (individual card view)
- Request New Card
- Transactions History
- Transaction Details
- Add Money / Recharge
- Payment Methods
- Dispute Transaction
- Profile Settings
- Security Settings

### 13.2 Admin Pages
- Admin Login
- Admin Dashboard
- User Management (list, view, edit)
- KYC Verification Queue
- Card Requests (pending approvals)
- All Cards (search, filter, manage)
- Transaction Monitoring
- Payment Gateway Settings
- Reports & Analytics
- System Settings
- Email Templates
- Slack Configuration
- Audit Logs
- Admin User Management
- Role & Permissions

---

## 14. API ENDPOINTS

### 14.1 User API Endpoints
- POST /api/register - User registration
- POST /api/login - User login
- POST /api/logout - User logout
- GET /api/user/profile - Get user profile
- PUT /api/user/profile - Update user profile
- POST /api/user/upload-kyc - Upload KYC documents
- POST /api/cards/request - Request new card
- GET /api/cards - Get user cards
- GET /api/cards/{id} - Get card details
- PUT /api/cards/{id}/activate - Activate card
- PUT /api/cards/{id}/block - Block/Unblock card
- PUT /api/cards/{id}/controls - Update card controls
- PUT /api/cards/{id}/limits - Update card limits
- PUT /api/cards/{id}/pin - Set/Change card PIN
- GET /api/transactions - Get transactions
- GET /api/transactions/{id} - Get transaction details
- POST /api/payments/recharge - Add money to card
- POST /api/disputes - Create dispute
- GET /api/disputes - Get user disputes
- GET /api/notifications - Get notifications
- PUT /api/notifications/{id}/read - Mark notification as read

### 14.2 Admin API Endpoints
- POST /api/admin/login - Admin login
- POST /api/admin/logout - Admin logout
- GET /api/admin/dashboard - Dashboard statistics
- GET /api/admin/users - Get all users
- GET /api/admin/users/{id} - Get user details
- PUT /api/admin/users/{id}/status - Suspend/Activate user
- PUT /api/admin/users/{id}/kyc - Approve/Reject KYC
- POST /api/admin/users/{id}/reset-password - Reset user password
- GET /api/admin/card-requests - Get card requests
- PUT /api/admin/card-requests/{id} - Approve/Reject card request
- GET /api/admin/cards - Get all cards
- GET /api/admin/cards/{id} - Get card details
- PUT /api/admin/cards/{id}/status - Update card status
- PUT /api/admin/cards/{id}/limits - Set card limits
- DELETE /api/admin/cards/{id} - Cancel card
- GET /api/admin/transactions - Get all transactions
- GET /api/admin/transactions/{id} - Get transaction details
- GET /api/admin/disputes - Get all disputes
- PUT /api/admin/disputes/{id} - Update dispute status
- GET /api/admin/reports/revenue - Revenue reports
- GET /api/admin/reports/users - User reports
- GET /api/admin/reports/cards - Card reports
- GET /api/admin/reports/transactions - Transaction reports
- GET /api/admin/settings - Get system settings
- PUT /api/admin/settings - Update system settings
- POST /api/admin/settings/test-email - Test email configuration
- POST /api/admin/settings/test-slack - Test Slack integration

---

## 15. TESTING STRATEGY

### 15.1 Unit Testing
- Model tests
- Service layer tests
- Helper function tests
- Validation tests

### 15.2 Feature Testing
- Authentication flows
- Card request workflow
- Transaction processing
- Payment integration
- Notification delivery

### 15.3 Integration Testing
- PayPal payment flow
- Email delivery
- Slack notifications
- Database transactions

### 15.4 Security Testing
- Authentication bypass attempts
- SQL injection tests
- XSS vulnerability tests
- CSRF protection tests
- Rate limiting tests

---

## 16. MAINTENANCE & SUPPORT

### 16.1 Regular Maintenance
- Database backups (daily)
- Log rotation
- Security updates
- Performance monitoring
- Queue monitoring

### 16.2 Monitoring
- Application performance monitoring
- Error tracking
- Transaction monitoring
- Payment gateway status
- Email delivery rates
- Slack notification delivery

### 16.3 Support Channels
- Email support
- Admin dashboard help section
- Documentation portal
- Issue tracking system

---

## 17. FUTURE ENHANCEMENTS

### 17.1 Planned Features
- Mobile application (iOS/Android)
- Additional payment gateways
- SMS notifications
- Biometric authentication
- Virtual card instant issuance
- Rewards and cashback program
- Referral system
- Multi-language support
- Dark mode UI

### 17.2 Advanced Analytics
- AI-powered fraud detection
- Spending pattern analysis
- Predictive analytics
- Customer behavior insights
- Automated risk scoring

---

## 18. COMPLIANCE & LEGAL

### 18.1 Regulatory Compliance
- PCI DSS compliance
- GDPR compliance (for EU users)
- KYC/AML regulations
- Data protection laws
- Financial regulations

### 18.2 Terms & Policies
- Terms of Service
- Privacy Policy
- Cookie Policy
- Refund Policy
- Dispute Resolution Policy
- Acceptable Use Policy

---

**Version**: 1.0.0  
**Last Updated**: 2024  
**Document Status**: Complete

---

**Contact Information**  
For technical support or inquiries, please contact the development team through the project repository.
