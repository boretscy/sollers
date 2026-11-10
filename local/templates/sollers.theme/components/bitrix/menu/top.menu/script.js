jQuery(function ($) {
    var $menuBar = $('.top-menu-bar');
    if (!$menuBar.length) {
        return;
    }

    var $triggers = $menuBar.find('[data-menu-target]');
    var $panels = $menuBar.find('[data-menu-panel]');
    var hideTimeout = null;

    function showPanel(target) {
        clearTimeout(hideTimeout);
        var $targetPanel = $panels.filter('[data-menu-panel="' + target + '"]');

        $panels.not($targetPanel).addClass('d-none');
        $triggers.removeClass('is-hovered');
        $triggers.filter('[data-menu-target="' + target + '"]').addClass('is-hovered');

        if ($targetPanel.length) {
            $targetPanel.removeClass('d-none');
        }
    }

    function scheduleHide() {
        hideTimeout = setTimeout(function () {
            $panels.addClass('d-none');
            $triggers.removeClass('is-hovered');
        }, 200);
    }

    $triggers.on('mouseenter', function () {
        var target = $(this).data('menu-target');
        if (target) {
            showPanel(target);
        }
    });

    $menuBar.find('.top-menu-link').not('[data-menu-target]').on('mouseenter', function () {
        scheduleHide();
    });

    $panels.on('mouseenter', function () {
        clearTimeout(hideTimeout);
    });

    $menuBar.on('mouseleave', function () {
        scheduleHide();
    });

    // Subtabs in Clients megamenu (Покупателям / Владельцам / О компании)
    var $subtabBtns = $('.clients-subtab-btn');
    var $subtabRows = $('[data-clients-content]');

    $subtabBtns.on('mouseenter click', function () {
        var tabKey = $(this).data('clients-tab');
        $subtabBtns.removeClass('active');
        $(this).addClass('active');

        $subtabRows.addClass('d-none');
        $subtabRows.filter('[data-clients-content="' + tabKey + '"]').removeClass('d-none');
    });
});
