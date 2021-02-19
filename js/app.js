(function($) {

    // $("#cssmenu").stick_in_parent({parent: '.contenu'});

    $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
    $('#cssmenu #menu-button').on('click', function() {
        var menu = $(this).next('ul');
        if (menu.hasClass('open')) {
            menu.removeClass('open');
            $("#menu-button").removeClass('b-close');
        } else {
            menu.addClass('open');
            $("#menu-button").addClass('b-close');
        }
    });
    $('#cssmenu2').prepend('<div id="menu-button">Menu</div>');
    $('#cssmenu2 #menu-button').on('click', function() {
        var menu = $(this).next('ul');
        if (menu.hasClass('open')) {
            menu.removeClass('open');
        } else {
            menu.addClass('open');
        }
    });

})(jQuery);
(function($) {
        $.fn.accordify = function(options) {

            var trigger = this;
            //set options
            trigger.optvals = {
                startOpen: false,
                singleOpen: true,
                target: '.accordion',
                activeClass: 'acActive',
                openSpeed: 500,
                closeSpeed: 500,
                openIcon: '',
                closeIcon: 'rotate'
            }
            var opt = $.extend({}, this.optvals, options);

            //add trigger icon
            trigger.prepend('<span class="acIcon icon-caret-up">' + opt.openIcon + '</span>');

            //only add/change a close icon if it's not set to rotate the open icon
            function close_icon(el) {
                if (opt.closeIcon != 'rotate') {
                    el.html(opt.closeIcon);
                }
            }

            //only change open icon if the close icon is not set to rotate
            function open_icon(el) {
                if (opt.closeIcon != 'rotate') {
                    el.html(opt.openIcon);
                }
            }

            //set the accordion to open or closed on load depending on the startOpen option
            if (!opt.startOpen) {
                trigger.next(opt.target).hide();
                trigger.removeClass(opt.activeClass)
                    .find('.acIcon').html(opt.openIcon);
            } else {
                trigger.addClass(opt.activeClass)
                    .next(opt.target).show();
                close_icon(trigger.find('.acIcon'));
            }

            //fire accordion with click event
            trigger.on('click', function() {

                if ($(this).hasClass(opt.activeClass)) {
                    $(this).removeClass(opt.activeClass).next(opt.target).slideUp(opt.closeSpeed);
                    open_icon($(this).find('.acIcon'));

                } else {
                    if (opt.singleOpen) {
                        trigger.removeClass(opt.activeClass);
                        trigger.next(opt.target).slideUp(opt.closeSpeed);
                        open_icon(trigger.find('.acIcon'));

                    }

                    $(this).addClass(opt.activeClass).next(opt.target).slideDown(opt.openSpeed);
                    close_icon($(this).find('.acIcon'));
                }

            });

        };
    }
    (jQuery));

$(document).ready(function() {
    //demo 1 where only one accordion can be open at a time	
    $('.accordion-trigger').accordify({
        singleOpen: true
    });
    //demo 2 with multiple open accordions
    $('.accordion-trigger2').accordify({
        singleOpen: false
    });

});

function tri(tri) {
    document.getElementById('tri').value = tri.value
    document.getElementById('p').value = 1;
    document.forms['moteur'].submit();

}


function validalertemail(action) {
    document.getElementById('laction').value = action;
    //alert(action);
    document.form.submit();
}