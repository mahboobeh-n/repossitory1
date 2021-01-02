<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a  class="nav-link">

                <div class="text-wrapper">

                    <p class="designation">مدیریت سایت </p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">منوی اصلی</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">کنترل پنل</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">صفحات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.users')}}">کاربران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.categories')}}">دسته بندی ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.articles')}}">مطالب</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{route('admin.comments')}}">نظرات</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">ابزارها</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.portfolios')}}"> نمونه کارها </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}"> سوالات متداول </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}"> خدمات ما </a>
                    </li>

                </ul>
            </div>
        </li>
    </ul>
</nav>
