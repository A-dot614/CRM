<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CRM</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8fafc;
            color: #0f172a;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        .wrapper {
            width: 100%;
            padding: 24px;
        }
        .container {
            width: 100%;
            max-width: 680px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
        }
        .hero {
            background: linear-gradient(135deg, #eff6ff 0%, #eef2ff 100%);
            padding: 40px 32px;
            text-align: center;
        }
        .hero h1 {
            margin: 0;
            font-size: 32px;
            line-height: 1.2;
            letter-spacing: -0.02em;
            color: #0f172a;
        }
        .hero p {
            margin: 16px auto 0;
            max-width: 520px;
            color: #475569;
            font-size: 16px;
            line-height: 1.75;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 16px;
            border-radius: 999px;
            background: #e0f2fe;
            color: #1d4ed8;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }
        .content {
            padding: 32px;
        }
        .section {
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 24px;
            margin-bottom: 24px;
            background: #ffffff;
        }
        .section h2 {
            margin: 0 0 12px;
            font-size: 20px;
            color: #0f172a;
        }
        .section p {
            margin: 0;
            color: #475569;
            line-height: 1.75;
        }
        .button {
            display: inline-block;
            padding: 14px 26px;
            background: #2563eb;
            color: #ffffff;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-top: 24px;
        }
        .feature {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 18px;
        }
        .feature strong {
            display: block;
            margin-bottom: 6px;
            color: #0f172a;
            font-size: 15px;
        }
        .feature span {
            color: #475569;
            font-size: 14px;
            line-height: 1.7;
        }
        .footer {
            padding: 24px 32px 32px;
            color: #64748b;
            font-size: 13px;
            text-align: center;
        }
        .footer a {
            color: #2563eb;
            text-decoration: none;
        }
        @media (max-width: 640px) {
            .container {border-radius: 20px;}
            .hero {padding: 32px 20px;}
            .content {padding: 24px 20px;}
            .feature-grid {grid-template-columns: 1fr;}
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="hero">
                <div class="badge">Welcome Aboard</div>
                <h1>You're now part of the CRM community</h1>
                <p>Thanks for joining our platform. Your account is ready, and your new dashboard is designed to keep every lead, outreach, and close in one beautiful place.</p>
            </div>
            <div class="content">
                <div class="section">
                    <h2>Hello, {{ $name ?? 'Friend' }}!</h2>
                    <p>We are excited to have you onboard. Your CRM workspace is built with the same vibrant dashboard palette you love — clean white surfaces, bright blue highlights, warm orange progress cues, and green success accents.</p>
                </div>
                <div class="section">
                    <h2>Get started in seconds</h2>
                    <p>Open your dashboard to add leads, track outreach status, and watch your pipeline grow. Need help? Our support team is ready to help you every step of the way.</p>
                    <div style="margin-top: 24px; text-align: center;">
                        <a href="{{ $actionUrl ?? url('/') }}" class="button">Go to your dashboard</a>
                    </div>
                </div>
                <div class="feature-grid">
                    <div class="feature">
                        <strong>Lead management</strong>
                        <span>Track every prospect from new to closed with a clean, easy-to-read interface.</span>
                    </div>
                    <div class="feature">
                        <strong>Smart outreach</strong>
                        <span>Monitor outreach progress across channels and keep your follow-up schedule on track.</span>
                    </div>
                    <div class="feature">
                        <strong>Dashboard insights</strong>
                        <span>Visualize your wins, warm leads, and hot opportunities at a glance.</span>
                    </div>
                    <div class="feature">
                        <strong>Secure access</strong>
                        <span>Log in anytime with confidence and manage your CRM from desktop or mobile.</span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>If you have any questions, reply to this email or visit our help center.</p>
                <p><a href="{{ url('/') }}">Visit CRM</a></p>
            </div>
        </div>
    </div>
</body>
</html>
