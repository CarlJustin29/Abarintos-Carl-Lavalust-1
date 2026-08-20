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
            font-family: Inter, -apple-system, BlinkMacSystemFont,
                         "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
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
            background: var(--dark);
            color: white;
        }

        .navigation .active:hover {
            background: var(--dark-soft);
            color: white;
        }

        /* Main */

        .container {
            width: min(1080px, 92%);
            margin: 0 auto;
            padding: 50px 0 40px;
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

        .heading {
            margin-top: 18px;
            margin-bottom: 30px;
        }

        .heading h1 {
            font-size: clamp(32px, 5vw, 46px);
            letter-spacing: -1.8px;
            line-height: 1.1;
            font-weight: 800;
        }

        .heading p {
            margin-top: 10px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.6;
        }

        /* Profile Card */

        .profile-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;

            box-shadow:
                0 1px 2px rgba(0, 0, 0, 0.03),
                0 12px 35px rgba(15, 23, 42, 0.06);
        }

        /* Profile Header */

        .profile-header {
            background: var(--dark);
            color: white;

            padding: 42px 35px;

            display: flex;
            align-items: center;
            gap: 25px;
        }

        .avatar {
            width: 88px;
            height: 88px;

            flex-shrink: 0;

            background: #ffffff;
            color: var(--dark);

            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
            font-weight: 800;

            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        }

        .profile-header-content h2 {
            font-size: 28px;
            letter-spacing: -0.8px;
            margin-bottom: 7px;
        }

        .profile-header-content p {
            color: #cbd5e1;
            font-size: 14px;
        }

        .profile-status {
            margin-left: auto;

            display: flex;
            align-items: center;
            gap: 8px;

            padding: 7px 11px;

            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);

            border-radius: 7px;

            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.7px;
            text-transform: uppercase;

            white-space: nowrap;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #4ade80;
            border-radius: 50%;
        }

        /* Information */

        .content {
            padding: 32px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;

            margin-bottom: 18px;
        }

        .section-heading h2 {
            font-size: 17px;
            font-weight: 750;
        }

        .section-heading span {
            color: var(--muted);
            font-size: 11px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .info {
            background: var(--surface-soft);
            border: 1px solid var(--border);

            padding: 19px;

            border-radius: 11px;

            transition: 0.2s ease;
        }

        .info:hover {
            border-color: #cbd5e1;
            transform: translateY(-2px);
        }

        .info strong {
            display: block;

            color: #9ca3af;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 1px;
            text-transform: uppercase;

            margin-bottom: 8px;
        }

        .info-value {
            display: block;

            color: var(--text);

            font-size: 14px;
            font-weight: 650;

            line-height: 1.5;
        }

        /* Description */

        .description {
            margin-top: 28px;

            background: #fafafa;
            border: 1px solid var(--border);

            padding: 23px;

            border-radius: 11px;
        }

        .description-header {
            display: flex;
            align-items: center;
            gap: 10px;

            margin-bottom: 12px;
        }

        .description-icon {
            width: 30px;
            height: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--accent-soft);
            color: var(--accent);

            border-radius: 7px;

            font-size: 12px;
            font-weight: 800;
        }

        .description strong {
            font-size: 14px;
        }

        .description p {
            color: var(--muted);

            font-size: 13px;
            line-height: 1.7;
        }

        /* Bottom */

        .bottom-bar {
            margin-top: 28px;

            padding-top: 24px;

            border-top: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .bottom-note {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        .back {
            display: inline-flex;
            align-items: center;
            gap: 9px;

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

        .back:hover {
            background: var(--dark-soft);
            transform: translateY(-1px);
        }

        .back-arrow {
            font-size: 16px;
        }

        /* Footer */

        footer {
            text-align: center;

            padding: 25px 20px 35px;

            color: #9ca3af;

            font-size: 11px;
            letter-spacing: 0.3px;
        }

        /* Responsive */

        @media (max-width: 750px) {

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

            .profile-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .profile-status {
                margin-left: 0;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {

            .container {
                padding-top: 35px;
            }

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

            .profile-header {
                padding: 30px 22px;
            }

            .avatar {
                width: 75px;
                height: 75px;
                font-size: 27px;
            }

            .profile-header-content h2 {
                font-size: 24px;
            }

            .content {
                padding: 22px 18px;
            }

            .bottom-bar {
                align-items: stretch;
                flex-direction: column;
            }

            .back {
                justify-content: center;
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

            <a href="<?= site_url('student') ?>">
                Home
            </a>

            <a
                class="active"
                href="<?= site_url('student/profile') ?>"
            >
                Profile
            </a>

        </div>

    </nav>


    <!-- Main Content -->

    <main class="container">

        <div class="top-label">
            Student Profile
        </div>


        <div class="heading">

            <h1>
                Personal Information
            </h1>

            <p>
                View your academic and personal information
                stored in the Student Information Portal.
            </p>

        </div>


        <!-- Profile Card -->

        <section class="profile-card">


            <!-- Profile Header -->

            <div class="profile-header">

                <div class="avatar">
                    <?= strtoupper(substr($student['name'], 0, 1)) ?>
                </div>


                <div class="profile-header-content">

                    <h2>
                        <?= $student['name'] ?>
                    </h2>

                    <p>
                        <?= $student['course'] ?>
                        ·
                        <?= $student['year'] ?>
                    </p>

                </div>


                <div class="profile-status">

                    <span class="status-dot"></span>

                    Student Profile

                </div>

            </div>


            <!-- Content -->

            <div class="content">


                <div class="section-heading">

                    <h2>
                        Academic Information
                    </h2>

                    <span>
                        Student Details
                    </span>

                </div>


                <div class="info-grid">


                    <div class="info">

                        <strong>
                            Student ID
                        </strong>

                        <span class="info-value">
                            <?= $student['student_id'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Student Name
                        </strong>

                        <span class="info-value">
                            <?= $student['name'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Course
                        </strong>

                        <span class="info-value">
                            <?= $student['course'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Year Level
                        </strong>

                        <span class="info-value">
                            <?= $student['year'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Section
                        </strong>

                        <span class="info-value">
                            <?= $student['section'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Email
                        </strong>

                        <span class="info-value">
                            <?= $student['email'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Contact Number
                        </strong>

                        <span class="info-value">
                            <?= $student['contact'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Address
                        </strong>

                        <span class="info-value">
                            <?= $student['address'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Skills
                        </strong>

                        <span class="info-value">
                            <?= $student['skills'] ?>
                        </span>

                    </div>


                    <div class="info">

                        <strong>
                            Hobbies
                        </strong>

                        <span class="info-value">
                            <?= $student['hobbies'] ?>
                        </span>

                    </div>

                </div>


                <!-- Description -->

                <div class="description">

                    <div class="description-header">

                        <div class="description-icon">
                            ID
                        </div>

                        <strong>
                            Profile Description
                        </strong>

                    </div>

                    <p>
                        <?= $student['description'] ?>
                    </p>

                </div>


                <!-- Bottom Navigation -->

                <div class="bottom-bar">

                    <div class="bottom-note">
                        Student Information Portal<br>
                        LavaLust Framework
                    </div>

                    <a
                        class="back"
                        href="<?= site_url('student') ?>"
                    >

                        <span class="back-arrow">
                            ←
                        </span>

                        Back to Home

                    </a>

                </div>

            </div>

        </section>

    </main>


    <footer>
        Student Information Portal · LavaLust
    </footer>

</body>
</html>