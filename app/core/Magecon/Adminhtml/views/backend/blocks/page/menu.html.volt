<div class="page-header-menu">
    <div class="container-fluid">
        <!-- BEGIN MEGA MENU -->
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
        <div class="hor-menu">
            <ul class="nav navbar-nav">
                {% for item in currentView.getItems() %}
                {{ item.toHtml() }}
                {% endfor %}
            </ul>
        </div>
        <!-- END MEGA MENU -->
    </div>
</div>