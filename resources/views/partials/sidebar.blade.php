<ul class="list-group mb-4">
    
    <li class="list-group-item d-flex align-items-center py-3">    
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        class="text-brown me-1" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
        <a href="{{ route('account.show') }}" class="text-decoration-none ms-1">My Account</a>
    </li>

    <li class="list-group-item d-flex align-items-center py-3">
        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2"
        class="text-brown me-1"
            fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6">
            </line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
        <a href="{{ route('orders.index') }}" class="text-decoration-none ms-1">My Orders</a>
    </li>

    <li class="list-group-item d-flex align-items-center py-3">
        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" class="text-brown me-1" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        <a href="{{ route('update.account.create') }}" class="text-decoration-none ms-1">Update Account</a>
    </li>
    
    <li class="list-group-item d-flex align-items-center py-3">
        <svg viewBox="0 0 24 24"  width="20" height="20" class="text-brown me-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path></svg>
        <a href="{{ route('update.password.create') }}" class="text-decoration-none ms-1">Update Password</a>
    </li>
</ul>