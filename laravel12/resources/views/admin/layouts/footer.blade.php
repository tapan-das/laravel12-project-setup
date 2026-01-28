<footer class="main-footer d-flex justify-content-between align-items-center">

    <!-- LEFT -->
    <div class="footer-left">
        <strong>
            © {{ date('Y') }}
            <a href="{{ config('app.url') }}" target="_blank">
                {{ config('app.name', 'Admin Panel') }}
            </a>
        </strong>
        <span class="ml-1">All rights reserved.</span>
    </div>

    <!-- RIGHT -->
    <div class="footer-right d-none d-sm-inline-block">
        <span class="text-muted">
            Version {{ config('app.version', '1.0.0') }}
        </span>
    </div>

</footer>