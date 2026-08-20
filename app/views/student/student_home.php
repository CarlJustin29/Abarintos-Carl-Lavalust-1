<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #f4f6f8;
            --surface: #ffffff;
            --surface-soft: #f8fafc;
            --border: #e5e7eb;
            --text: #111827;
            --muted: #6b7280;
            --dark: #111827;
            --dark-soft: #1f2937;
            --accent: #2563eb;
            --accent-soft: #eff6ff;
        }

        body {
            font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI",
                         Roboto, Helvetica, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        /* Navigation */

        nav {
            height: 72px;
            background: #ffffff;
            border-bottom: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 8%;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--dark);
            color: white;

            border-radius: 10px;

            font-size: 14px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-name {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: -0.2px;
        }

        .brand-subtitle {
            font-size: 11px;
            color: var(--muted);
            margin-top: 2px;
        }

        .navigation {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .navigation a {
            color: #4b5563;
            text-decoration: none;

            padding: 9px 14px;
            border-radius: 8px;

            font-size: 14px;
            font-weight: 500;

            transition: 0.2s ease;
        }

        .navigation a:hover {
            background: #f3f4f6;
            color: var(--text);
        }

        .navigation .active {
            background: #111827;
            color: white;
        }

        .navigation .active:hover {
            background: #1f2937;
            color: white;
        }

        /* Main */

        .container {
            width: min(1080px, 92%);
            margin: 0 auto;
            padding: 55px 0 40px;
        }

        .top-label {
            display: inline-flex;
            align-items: center;

            padding: 7px 11px;

            background: var(--accent-soft);
            border: 1px solid #dbeafe;

            border-radius: 7px;

            color: #1d4ed8;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
        }

        .heading-area {
            margin-top: 20px;
            margin-bottom: 32px;
        }

        .heading-area h1 {
            font-size: clamp(34px, 5vw, 50px);
            line-height: 1.05;
            letter-spacing: -2px;
            font-weight: 800;
            color: var(--text);
        }

        .heading-area h1 span {
            color: #374151;
        }

        .heading-area p {
            max-width: 650px;
            margin-top: 14px;

            color: var(--muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* Main Card */

        .main-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 1px 2px rgba(0, 0, 0, 0.03),
                0 12px 35px rgba(15, 23, 42, 0.06);
        }

        .card-header {
            padding: 26px 30px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            border-bottom: 1px solid var(--border);
        }

        .card-header h2 {
            font-size: 16px;
            font-weight: 700;
        }

        .card-header p {
            margin-top: 4px;
            color: var(--muted);
            font-size: 12px;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 8px;

            padding: 7px 11px;

            border: 1px solid #d1fae5;
            background: #f0fdf4;

            border-radius: 7px;

            color: #166534;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #16a34a;
            border-radius: 50%;
        }

        /* Information */

        .information {
            padding: 30px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .info {
            background: var(--surface-soft);
            border: 1px solid var(--border);

            padding: 20px;

            border-radius: 12px;

            transition: 0.2s ease;
        }

        .info:hover {
            border-color: #cbd5e1;
            transform: translateY(-2px);
        }

        .info-label {
            display: block;

            color: #9ca3af;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 1px;
            text-transform: uppercase;

            margin-bottom: 9px;
        }

        .info-value {
            display: block;

            color: var(--text);

            font-size: 15px;
            font-weight: 650;
        }

        /* Footer Card */

        .card-footer {
            padding: 22px 30px;

            background: #fafafa;
            border-top: 1px solid var(--border);

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-text {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            background: var(--dark);
            color: white;

            text-decoration: none;

            padding: 12px 18px;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 650;

            transition: 0.2s ease;

            white-space: nowrap;
        }

        .button:hover {
            background: var(--dark-soft);
            transform: translateY(-1px);
        }

        .button-arrow {
            margin-left: 9px;
            font-size: 16px;
            line-height: 0;
        }

        /* Page Footer */

        footer {
            text-align: center;
            padding: 25px 20px 35px;

            color: #9ca3af;

            font-size: 11px;
            letter-spacing: 0.3px;
        }

        /* Responsive */

        @media (max-width: 700px) {

            nav {
                padding: 0 5%;
            }

            .brand-subtitle {
                display: none;
            }

            .navigation a {
                padding: 8px 9px;
                font-size: 12px;
            }

            .container {
                padding-top: 35px;
            }

            .heading-area h1 {
                letter-spacing: -1px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .card-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .card-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .button {
                width: 100%;
            }
        }

        @media (max-width: 430px) {

            .brand-name {
                font-size: 14px;
            }

            .brand-mark {
                width: 34px;
                height: 34px;
            }

            .navigation a {
                font-size: 11px;
                padding: 7px;
            }

            .information {
                padding: 20px;
            }

            .card-header {
                padding: 22px 20px;
            }

            .card-footer {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>

        <div class="brand">

            <div class="brand-mark">
                SI
            </div>

            <div>
                <div class="brand-name">
                    Student Information
                </div>

                <div class="brand-subtitle">
                    LavaLust Portal
                </div>
            </div>

        </div>

        <div class="navigation">

            <a
                class="active"
                href="<?= site_url('student') ?>"
            >
                Home
            </a>

            <a
                href="<?= site_url('student/profile') ?>"
            >
                Profile
            </a>

        </div>

    </nav>


    <!-- Main Content -->
    <main class="container">

        <div class="top-label">
            Laboratory Activity No. 3
        </div>


        <div class="heading-area">

            <h1>
                Welcome back,
                <span><?= $student_name ?></span>
            </h1>

            <p>
                This student portal demonstrates how LavaLust
                connects routes, controllers, views, and
                middleware into a functional web application.
            </p>

        </div>


        <!-- Student Card -->
        <section class="main-card">

            <div class="card-header">

                <div>
                    <h2>
                        Student Overview
                    </h2>

                    <p>
                        Your academic information
                    </p>
                </div>

                <div class="status">
                    <span class="status-dot"></span>
                    Active Student
                </div>

            </div>


            <div class="information">

                <div class="info-grid">

                    <div class="info">

                        <span class="info-label">
                            Student Name
                        </span>

                        <span class="info-value">
                            <?= $student_name ?>
                        </span>

                    </div>


                    <div class="info">

                        <span class="info-label">
                            Course
                        </span>

                        <span class="info-value">
                            <?= $course ?>
                        </span>

                    </div>


                    <div class="info">

                        <span class="info-label">
                            Year Level
                        </span>

                        <span class="info-value">
                            <?= $year ?>
                        </span>

                    </div>


                    <div class="info">

                        <span class="info-label">
                            Section
                        </span>

                        <span class="info-value">
                            <?= $section ?>
                        </span>

                    </div>

                </div>

            </div>


            <div class="card-footer">

                <div class="footer-text">
                    View additional information about your
                    academic profile.
                </div>

                <a
                    class="button"
                    href="<?= site_url('student/profile') ?>"
                >
                    View Student Profile

                    <span class="button-arrow">
                        →
                    </span>
                </a>

            </div>

        </section>

    </main>


    <footer>
        Student Information Portal · LavaLust Framework
    </footer>

</body>
</html>
```
