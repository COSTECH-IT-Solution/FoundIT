<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | FoundIt</title>
    <link rel="stylesheet" href="style 1.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="app-container">
        <nav class="sidebar">
            <div class="logo">Found<span>It</span></div>
            <ul class="nav-links">
                <li class="active"><a href="dashboard.html"><i data-lucide="layout-dashboard"></i> Dashboard</a></li>
                <li><a href="report.html"><i data-lucide="file-plus"></i> Report Found</a></li>
                <li><a href="search.html"><i data-lucide="search"></i> Search Docs</a></li>
                <li><a href="profile.html"><i data-lucide="user"></i> My Profile</a></li>
                <li class="logout"><a href="logout.php"><i data-lucide="log-out"></i> Logout</a></li>
            </ul>
        </nav>

        <main class="main-content">
            <header class="top-bar">
                <h1>Welcome back, Finder!</h1>
                <div class="user-badge">JD</div>
            </header>

            <section class="stats-grid">
                <div class="stat-card">
                    <span class="stat-value">12</span>
                    <span class="stat-label">Items Found</span>
                </div>
                <div class="stat-card">
                    <span class="stat-value">8</span>
                    <span class="stat-label">Returned</span>
                </div>
                <div class="stat-card reward">
                    <span class="stat-value">$40</span>
                    <span class="stat-label">Total Rewards</span>
                </div>
            </section>

            <div class="action-grid">
                <a href="report.html" class="big-button report-btn">
                    <i data-lucide="megaphone"></i>
                    <div>
                        <h3>Report a Document</h3>
                        <p>Found someone's ID? Post it here safely.</p>
                    </div>
                </a>
                <a href="search.html" class="big-button search-btn">
                    <i data-lucide="search"></i>
                    <div>
                        <h3>Search Database</h3>
                        <p>Check if a specific document is already listed.</p>
                    </div>
                </a>
            </div>
        </main>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>