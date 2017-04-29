<li aria-haspopup="true" class="{% if currentView.getLevel() == 0 %}menu-dropdown classic-menu-dropdown{% elseif currentView.hasItem() %}dropdown-submenu{% endif %}">
    <a href="{{ currentView.getAction() }}">
        {% if currentView.getIcon() %}
            <i class="{{ currentView.getIcon() }}"></i>
        {% endif %}
        {{ currentView.getTitle() }}
        {% if currentView.hasItem() %}<span class="arrow"></span>{% endif %}
    </a>
    {% if currentView.hasItem() %}
        <ul class="dropdown-menu pull-left">
            {% for item in currentView.getItems() %}
                {{ item.toHtml() }}
            {% endfor %}
        </ul>
    {% endif %}
</li>