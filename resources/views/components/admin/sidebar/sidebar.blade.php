@if (!Route::is('admin'))
  <aside class="sidebar">
    <x-admin.sidebar.sidebar-list/>
  </aside>
@endif
