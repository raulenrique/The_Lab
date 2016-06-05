//Animating Home Page Elements

var pContainerHeight = $('.home-section').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.home-content-inner').css({
      'transform' : 'translate(0px, '+ wScroll /8 +'%)'
    });
  }


  // Landing Elements
  if(wScroll > $('.food-category-pics').offset().top - ($(window).height() / 1.2)) {

    $('.food-category-pics figure').each(function(i){

      setTimeout(function(){
        $('.food-category-pics figure').eq(i).addClass('is-showing');
      }, (700 * (Math.exp(i * 0.14))) - 350);
    });

  }


  // Promoscope
  if(wScroll > $('.large-window').offset().top - $(window).height()){

    $('.large-window').css({'background-position':'center '+ (wScroll - $('.large-window').offset().top) +'px'});

    var opacity = (wScroll - $('.large-window').offset().top + 400) / (wScroll / 5);

    $('.window-tint').css({'opacity': opacity});

  }


  // Floating Elements

  if(wScroll > $('.blog-posts').offset().top - $(window).height()){

    var offset = (Math.min(0, wScroll - $('.blog-posts').offset().top +$(window).height() - 350)).toFixed();

    $('.post-1').css({'transform': 'translate('+ offset +'px, '+ Math.abs(offset * 0.2) +'px)'});

    $('.post-3').css({'transform': 'translate('+ Math.abs(offset) +'px, '+ Math.abs(offset * 0.2) +'px)'});

  }
});



// ------------------------NAV BAR---------------------------//
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 300) {
        $('.navheader').addClass('sticky');
    } else {
        $('.navheader').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.navheader').hasClass('open-nav')) {
        $('.navheader').removeClass('open-nav');
    } else {
        $('.navheader').addClass('open-nav');
    }
});

$('navheader li a').click(function() {
    if ($('.navheader').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.navheader').removeClass('open-nav');
    }
});

// Navigation Scroll - ljepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});


// ----------------------SMOOTH SCROLLING------------//
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
});


// --------------------------------------ROTATE / ANIMATE BRAND NAME ON HOME PAGE--------------//
jQuery(document).ready(function($) {
    //set animation timing
    var animationDelay = 2000,
        //loading bar effect
        barAnimationDelay = 3800,
        barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the css file
        //letters effect
        lettersDelay = 70,
        //type effect
        typeLettersDelay = 150,
        selectionDuration = 500,
        typeAnimationDelay = selectionDuration + 800,
        //clip effect 
        revealDuration = 600,
        revealAnimationDelay = 1500;

    initHeadline();


    function initHeadline() {
        //insert <i> element for each letter of a changing word
        singleLetters($('.brandAnimation-title.letters').find('b'));
        //initialise headline animation
        animateHeadline($('.brandAnimation-title'));
    }

    function singleLetters($words) {
        $words.each(function() {
            var word = $(this),
                letters = word.text().split(''),
                selected = word.hasClass('is-visible');
            for (i in letters) {
                if (word.parents('.rotate-2').length > 0) letters[i] = ( letters[i] == ' ' ) ? '<em class="brandAnimation-void">' + letters[i] + '</em>' : '<em>' + letters[i] + '</em>';
                    // letters[i] = '<em>' + letters[i] + '</em>';
                letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
            }
            var newLetters = letters.join('');
            word.html(newLetters).css('opacity', 1);
        });
    }

    function animateHeadline($headlines) {
        var duration = animationDelay;
        $headlines.each(function() {
            var headline = $(this);

            if (headline.hasClass('loading-bar')) {
                duration = barAnimationDelay;
                setTimeout(function() {
                    headline.find('.brandAnimation-words-wrapper').addClass('is-loading')
                }, barWaiting);
            } else if (headline.hasClass('clip')) {
                var spanWrapper = headline.find('.brandAnimation-words-wrapper'),
                    newWidth = spanWrapper.width() + 10
                spanWrapper.css('width', newWidth);
            } else if (!headline.hasClass('type')) {
                //assign to .brandAnimation-words-wrapper the width of its longest word
                var words = headline.find('.brandAnimation-words-wrapper b'),
                    width = 0;
                words.each(function() {
                    var wordWidth = $(this).width();
                    if (wordWidth > width) width = wordWidth;
                });
                headline.find('.brandAnimation-words-wrapper').css('width', width + 60);
            };

            //trigger animation
            setTimeout(function() {
                hideWord(headline.find('.is-visible').eq(0))
            }, duration);
        });
    }

    function hideWord($word) {
        var nextWord = takeNext($word);

        if ($word.parents('.brandAnimation-title').hasClass('type')) {
            var parentSpan = $word.parent('.brandAnimation-words-wrapper');
            parentSpan.addClass('selected').removeClass('waiting');
            setTimeout(function() {
                parentSpan.removeClass('selected');
                $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
            }, selectionDuration);
            setTimeout(function() {
                showWord(nextWord, typeLettersDelay)
            }, typeAnimationDelay);

        } else if ($word.parents('.brandAnimation-title').hasClass('letters')) {
            var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
            hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
            showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

        } else if ($word.parents('.brandAnimation-title').hasClass('clip')) {
            $word.parents('.brandAnimation-words-wrapper').animate({
                width: '2px'
            }, revealDuration, function() {
                switchWord($word, nextWord);
                showWord(nextWord);
            });

        } else if ($word.parents('.brandAnimation-title').hasClass('loading-bar')) {
            $word.parents('.brandAnimation-words-wrapper').removeClass('is-loading');
            switchWord($word, nextWord);
            setTimeout(function() {
                hideWord(nextWord)
            }, barAnimationDelay);
            setTimeout(function() {
                $word.parents('.brandAnimation-words-wrapper').addClass('is-loading')
            }, barWaiting);

        } else {
            switchWord($word, nextWord);
            setTimeout(function() {
                hideWord(nextWord)
            }, animationDelay);
        }
    }

    function showWord($word, $duration) {
        if ($word.parents('.brandAnimation-title').hasClass('type')) {
            showLetter($word.find('i').eq(0), $word, false, $duration);
            $word.addClass('is-visible').removeClass('is-hidden');

        } else if ($word.parents('.brandAnimation-title').hasClass('clip')) {
            $word.parents('.brandAnimation-words-wrapper').animate({
                'width': $word.width() + 10
            }, revealDuration, function() {
                setTimeout(function() {
                    hideWord($word)
                }, revealAnimationDelay);
            });
        }
    }

    function hideLetter($letter, $word, $bool, $duration) {
        $letter.removeClass('in').addClass('out');

        if (!$letter.is(':last-child')) {
            setTimeout(function() {
                hideLetter($letter.next(), $word, $bool, $duration);
            }, $duration);
        } else if ($bool) {
            setTimeout(function() {
                hideWord(takeNext($word))
            }, animationDelay);
        }

        if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
            var nextWord = takeNext($word);
            switchWord($word, nextWord);
        }
    }

    function showLetter($letter, $word, $bool, $duration) {
        $letter.addClass('in').removeClass('out');

        if (!$letter.is(':last-child')) {
            setTimeout(function() {
                showLetter($letter.next(), $word, $bool, $duration);
            }, $duration);
        } else {
            if ($word.parents('.brandAnimation-title').hasClass('type')) {
                setTimeout(function() {
                    $word.parents('.brandAnimation-words-wrapper').addClass('waiting');
                }, 200);
            }
            if (!$bool) {
                setTimeout(function() {
                    hideWord($word)
                }, animationDelay)
            }
        }
    }

    function takeNext($word) {
        return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
    }

    function takePrev($word) {
        return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
    }

    function switchWord($oldWord, $newWord) {
        $oldWord.removeClass('is-visible').addClass('is-hidden');
        $newWord.removeClass('is-hidden').addClass('is-visible');
    }
    $(window).resize(function() {
        headline = $('.brandAnimation-title');
        if (!headline.hasClass('type')) {
            //assign to .brandAnimation-words-wrapper the width of its longest word
            var words = headline.find('.brandAnimation-words-wrapper b'),
                width = 0;
            words.each(function() {
                var wordWidth = $(this).width();
                if (wordWidth > width) width = wordWidth;
            });
            headline.find('.brandAnimation-words-wrapper').css('width', width);
        };
    });
});
