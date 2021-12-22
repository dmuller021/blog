<div class="nav-wrapper">
    <nav>
        <a href="/" class="hover-this"><span class="{{ request()->is('/') ? 'active_span' : ''}}">Home</span></a>
        <a href="blogs" class="hover-this"><span class="{{ request()->is('blog') ? 'active_span' : ''}}">Blogs</span></a>
        <a href="login" class="hover-this"><span class="{{ request()->is('login') ? 'active_span' : '' }}">Login</span></a>
        <a href="contact" class="hover-this"><span class="{{ request()->is('contact') ? 'active_span' : '' }}">Contact</span></a>
        <div class="cursor"></div>
    </nav>
</div>
<script src="{{ url('../js/cursor.js') }}"></script>
