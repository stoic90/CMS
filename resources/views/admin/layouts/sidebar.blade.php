<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">

            <a href="{{ route('admin.index') }}" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>

            <section class="sidebar-part-title">Sell Section</section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>Windows</span>
                    <i class="fas fa-angle-right angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="{{ route('admin.market.category.index') }}">Category</a>
                    <a href="#">Cargo Form</a>
                    <a href="{{ route('admin.market.brand.index') }}">Brands</a>
                    <a href="#">Cargos</a>
                    <a href="#">Warehouse</a>
                    <a href="{{ route('admin.market.comment.index') }}">Comments</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>Orders</span>
                    <i class="fas fa-angle-right angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="#">New</a>
                    <a href="#">Pending</a>
                    <a href="#">Unpaid</a>
                    <a href="#">Expired</a>
                    <a href="#">Returned</a>
                    <a href="#">Total Orders</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>Payments</span>
                    <i class="fas fa-angle-right angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="#">Total Payments</a>
                    <a href="#">Online Payments</a>
                    <a href="#">Offline Payments</a>
                    <a href="#">Local Payments</a>
                </section>
            </section>

            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>Disounts</span>
                    <i class="fas fa-angle-right angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="#">Discount Coupon</a>
                    <a href="#">General Coupon</a>
                    <a href="#">Special Copoun</a>
                </section>
            </section>

            <a href="{{ route('admin.market.delivery.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Delivery Methods</span>
            </a>



            <section class="sidebar-part-title">Content Section</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Category</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Posts</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Comments</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Menu</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Frequently Questions</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Screw Maker</span>
            </a>



            <section class="sidebar-part-title">User Section</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>User Admins</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Customers</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Authorization</span>
            </a>



            <section class="sidebar-part-title">Tickets</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>New Tickets</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Open Tickets</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Close Tickets</span>
            </a>



            <section class="sidebar-part-title">Notifications</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Email Notifications</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>SMS Notifications</span>
            </a>



            <section class="sidebar-part-title">Settings</section>
            <a href="#" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>Settings</span>
            </a>

        </section>
    </section>
</aside>
