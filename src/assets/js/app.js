import $ from 'jquery';

window.$ = $;
import Foundation from 'foundation-sites';

$(document).foundation();
$('.sas-donate-form').donate();

function setEventsMargin() {
  var $events = $('.flexible--events');

  if ($events.length) {
    var $prev = $events.prev(),
      $next = $events.next(),
      $nextImage,
      $prevImage,
      $nextText,
      $prevText,
      isLargeScreen = Foundation.MediaQuery.atLeast('large'),
      isNextSlider = !!$next.find('.orbit').length,
      isPrevSlider = !!$prev.find('.orbit').length,
      eventsMargin = 0,
      nextMargin = 5 * 16,
      prevMargin = 5 * 16;

    if (isNextSlider) {
      $next = $next.find('.orbit-figure');
      $nextImage = $next.find('img');
      $nextText = $next.find('.orbit-caption');
      nextMargin = 0;
    }
    if (isPrevSlider) {
      $prev = $prev.find('.orbit-figure');
      $prevText = $prev.find('.orbit-caption');
      $prevImage = $prev.find('img');
      prevMargin = 0;
    }

    if (isLargeScreen) {
      var height = $events.height();

      eventsMargin = -1;
      nextMargin = (5 * 16) + (height / 2);
      prevMargin = (5 * 16) + (height / 2);
    }

    if ($next.length) {
      $next.css('padding-top', nextMargin).toggleClass('orbit-figure-large', isLargeScreen && isNextSlider);
      $events.css('margin-bottom', eventsMargin * nextMargin).toggleClass('flexible--events--after', isLargeScreen);
    }

    if ($prev.length) {
      $prev.css('padding-bottom', prevMargin).toggleClass('orbit-figure-large', isLargeScreen && isPrevSlider);
      $events.css('margin-top', eventsMargin * prevMargin).toggleClass('flexible--events--before', isLargeScreen);
    }

    if ($nextText && $nextText.length) {
      $nextText.css('margin-bottom', eventsMargin * prevMargin);
    }

    if ($prevText && $prevText.length) {
      $prevText.css('margin-top', eventsMargin * prevMargin);
    }

    if ($nextImage && $nextImage.length) {
      $next.css('background-image', 'url(' + $nextImage.prop('src') + ')');
    }

    if ($prevImage && $prevImage.length) {
      $prev.css('background-image', 'url(' + $prevImage.prop('src') + ')');
    }
  }
}

(function ($) {
  setEventsMargin();

  $(window).on('changed.zf.mediaquery', function () {
    setEventsMargin();
  });
})(jQuery);

