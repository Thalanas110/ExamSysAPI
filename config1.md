exam-system/
│
├── config/
│   ├── databases.php              # Multiple database connections config
│   ├── constants.php              # Application constants
│   ├── logging.php                # Logging configuration
│   ├── roles.php                  # Role permissions configuration
│   └── crypto.php                 # Encryption keys and settings
│
├── sql/
│   ├── primary/                   # Primary database (users, auth, sessions)
│   │   ├── users.json
│   │   ├── sessions.json
│   │   ├── audit_logs.json
│   │   ├── encryption_keys.json
│   │   │
│   │   └── queries/
│   │       ├── users/
│   │       │   ├── authenticate.sql
│   │       │   ├── get_all.sql
│   │       │   ├── get_by_id.sql
│   │       │   ├── get_by_email.sql
│   │       │   ├── create.sql
│   │       │   ├── update.sql
│   │       │   ├── update_password.sql
│   │       │   ├── update_last_login.sql
│   │       │   ├── delete.sql
│   │       │   ├── count.sql
│   │       │   ├── check_email_exists.sql
│   │       │   └── check_username_exists.sql
│   │       │
│   │       ├── sessions/
│   │       │   ├── create.sql
│   │       │   ├── get_by_token.sql
│   │       │   ├── get_by_refresh_token.sql
│   │       │   ├── revoke.sql
│   │       │   ├── revoke_all_user.sql
│   │       │   └── cleanup_expired.sql
│   │       │
│   │       ├── audit_logs/
│   │       │   ├── create.sql
│   │       │   ├── get_all.sql
│   │       │   ├── get_by_user.sql
│   │       │   ├── get_by_resource.sql
│   │       │   └── count.sql
│   │       │
│   │       └── encryption_keys/
│   │           ├── get_active.sql
│   │           ├── get_by_id.sql
│   │           ├── create.sql
│   │           ├── rotate.sql
│   │           └── deactivate.sql
│   │
│   ├── academic/                  # Academic database (students, subjects)
│   │   ├── students.json
│   │   ├── subjects.json
│   │   │
│   │   └── queries/
│   │       ├── students/
│   │       │   ├── get_all.sql
│   │       │   ├── get_by_id.sql
│   │       │   ├── get_by_email.sql
│   │       │   ├── create.sql
│   │       │   ├── update.sql
│   │       │   ├── delete.sql
│   │       │   ├── count.sql
│   │       │   └── check_email_exists.sql
│   │       │
│   │       └── subjects/
│   │           ├── get_all.sql
│   │           ├── get_by_id.sql
│   │           ├── create.sql
│   │           ├── update.sql
│   │           ├── delete.sql
│   │           └── count.sql
│   │
│   ├── examination/               # Examination database (exams, results)
│   │   ├── exams.json
│   │   ├── results.json
│   │   ├── questions.json
│   │   ├── submissions.json
│   │   │
│   │   └── queries/
│   │       ├── exams/
│   │       │   ├── get_all.sql
│   │       │   ├── get_by_id.sql
│   │       │   ├── get_by_examiner.sql
│   │       │   ├── get_available_for_student.sql
│   │       │   ├── get_completed_by_student.sql
│   │       │   ├── create.sql
│   │       │   ├── update.sql
│   │       │   ├── delete.sql
│   │       │   ├── publish.sql
│   │       │   ├── close.sql
│   │       │   └── count.sql
│   │       │
│   │       ├── results/
│   │       │   ├── get_all.sql
│   │       │   ├── get_by_id.sql
│   │       │   ├── get_by_student.sql
│   │       │   ├── get_by_exam.sql
│   │       │   ├── get_by_exam_and_student.sql
│   │       │   ├── create.sql
│   │       │   ├── update.sql
│   │       │   ├── delete.sql
│   │       │   └── get_statistics.sql
│   │       │
│   │       ├── questions/
│   │       │   ├── get_by_exam.sql
│   │       │   ├── get_by_id.sql
│   │       │   ├── create.sql
│   │       │   ├── update.sql
│   │       │   ├── delete.sql
│   │       │   └── bulk_create.sql
│   │       │
│   │       └── submissions/
│   │           ├── get_by_exam.sql
│   │           ├── get_by_student.sql
│   │           ├── get_by_exam_and_student.sql
│   │           ├── create.sql
│   │           ├── update.sql
│   │           └── count.sql
│   │
│   └── analytics/                 # Analytics database (reports, statistics)
│       ├── reports.json
│       ├── statistics.json
│       │
│       └── queries/
│           ├── reports/
│           │   ├── exam_performance.sql
│           │   ├── student_progress.sql
│           │   ├── examiner_workload.sql
│           │   └── subject_analytics.sql
│           │
│           └── statistics/
│               ├── overall_stats.sql
│               ├── exam_stats.sql
│               ├── student_stats.sql
│               └── trending_data.sql
│
├── app/
│   ├── models/
│   │   ├── Model.php                  # Base model class
│   │   │
│   │   ├── primary/                   # Models for primary DB
│   │   │   ├── User.php
│   │   │   ├── Session.php
│   │   │   ├── AuditLog.php
│   │   │   └── EncryptionKey.php
│   │   │
│   │   ├── academic/                  # Models for academic DB
│   │   │   ├── Student.php
│   │   │   └── Subject.php
│   │   │
│   │   ├── examination/               # Models for examination DB
│   │   │   ├── Exam.php
│   │   │   ├── Result.php
│   │   │   ├── Question.php
│   │   │   └── Submission.php
│   │   │
│   │   └── analytics/                 # Models for analytics DB
│   │       ├── Report.php
│   │       └── Statistic.php
│   │
│   ├── controllers/
│   │   ├── ApiController.php          # Base API controller
│   │   ├── AuthController.php         # Authentication endpoints
│   │   ├── StudentController.php      # Student CRUD endpoints
│   │   ├── ExamController.php         # Exam CRUD endpoints
│   │   ├── ResultController.php       # Result CRUD endpoints
│   │   ├── SubjectController.php      # Subject CRUD endpoints
│   │   ├── UserController.php         # User management endpoints
│   │   ├── AuditController.php        # Audit log endpoints
│   │   └── ReportController.php       # Analytics/reporting endpoints
│   │
│   ├── middleware/
│   │   ├── AuthMiddleware.php         # JWT/Token validation
│   │   ├── RoleMiddleware.php         # Role-based access control
│   │   ├── RateLimitMiddleware.php    # API rate limiting
│   │   ├── CorsMiddleware.php         # CORS handling
│   │   └── EncryptionMiddleware.php   # Request/response encryption
│   │
│   ├── validators/
│   │   ├── Validator.php              # Base validator class
│   │   ├── StudentValidator.php       # Student data validation
│   │   ├── ExamValidator.php          # Exam data validation
│   │   ├── ResultValidator.php        # Result data validation
│   │   ├── SubjectValidator.php       # Subject data validation
│   │   └── UserValidator.php          # User data validation
│   │
│   ├── responses/
│   │   ├── JsonResponse.php           # Standard JSON response formatter
│   │   └── ErrorResponse.php          # Standard error response formatter
│   │
│   ├── crypto/
│   │   ├── CryptoInterface.php        # Interface for encryption algorithms
│   │   ├── AES256GCM.php              # AES-256-GCM implementation
│   │   ├── CustomCipher.php           # Your custom cipher algorithm
│   │   ├── CryptoManager.php          # Manages encryption/decryption
│   │   ├── KeyManager.php             # Key generation, rotation, storage
│   │   ├── CryptoChain.php            # Chains multiple encryption layers
│   │   └── HashEngine.php             # Secure hashing (passwords, etc.)
│   │
│   └── core/
│       ├── Router.php                 # API route handler
│       ├── Database.php               # Database wrapper (PDO execution only)
│       ├── DatabaseManager.php        # Manages multiple database connections
│       ├── QueryLoader.php            # Loads SQL from files (zero SQL strings)
│       ├── Logger.php                 # Centralized logging system
│       ├── Auth.php                   # JWT/Token authentication handler
│       └── Request.php                # HTTP request parser
│
├── docs/
│   ├── swagger.yaml                   # OpenAPI 3.0 specification
│   ├── swagger-ui/                    # Swagger UI static files
│   │   ├── index.html
│   │   ├── swagger-ui.css
│   │   ├── swagger-ui-bundle.js
│   │   └── swagger-ui-standalone-preset.js
│   │
│   ├── crypto/
│   │   ├── custom-cipher-spec.md      # Custom cipher documentation
│   │   ├── key-rotation.md            # Key rotation procedures
│   │   └── encryption-flow.md         # Encryption layer flow diagram
│   │
│   └── databases/
│       ├── primary-schema.sql         # Primary DB schema
│       ├── academic-schema.sql        # Academic DB schema
│       ├── examination-schema.sql     # Examination DB schema
│       ├── analytics-schema.sql       # Analytics DB schema
│       └── database-architecture.md   # Multi-DB architecture doc
│
├── logs/
│   ├── app.log                        # General application logs
│   ├── error.log                      # Error logs
│   ├── database.log                   # Database query logs
│   ├── audit.log                      # User action audit trail
│   ├── crypto.log                     # Encryption/decryption events
│   └── .htaccess                      # Deny direct web access to logs
│
├── keys/
│   ├── .gitignore                     # Ignore all keys in git
│   ├── master.key                     # Master encryption key (NEVER COMMIT)
│   ├── aes.key                        # AES-256-GCM keys
│   ├── custom.key                     # Custom cipher keys
│   ├── jwt-private.pem                # JWT signing private key
│   ├── jwt-public.pem                 # JWT verification public key
│   └── .htaccess                      # Deny direct web access
│
├── public/
│   ├── index.php                      # API entry point
│   └── .htaccess                      # URL rewriting rules for API
│
├── routes/
│   └── api.php                        # All API route definitions
│
├── tests/
│   ├── unit/
│   │   ├── models/
│   │   │   ├── StudentTest.php
│   │   │   ├── ExamTest.php
│   │   │   └── UserTest.php
│   │   │
│   │   └── crypto/
│   │       ├── AES256GCMTest.php
│   │       ├── CustomCipherTest.php
│   │       └── CryptoChainTest.php
│   │
│   ├── integration/
│   │   ├── AuthTest.php
│   │   ├── StudentApiTest.php
│   │   ├── ExamApiTest.php
│   │   └── CrossDatabaseTest.php      # Tests spanning multiple DBs
│   │
│   └── sql/
│       ├── validate-queries.php       # Validates all SQL files
│       └── test-queries.php           # Tests queries against DBs
│
├── cli/
│   ├── key-rotate.php                 # CLI tool for key rotation
│   ├── cache-clear.php                # Clear query cache
│   ├── db-migrate.php                 # Database migrations
│   ├── sql-validate.php               # Validate all SQL syntax
│   └── db-sync.php                    # Sync data across databases
│
├── .gitignore                         # Git ignore rules
├── .htaccess                          # Root htaccess (redirect to public/)
├── composer.json                      # PHP dependencies
├── composer.lock                      # Locked dependencies
└── README.md                          # Project documentation