
<script type="text/javascript">
      $(document).ready(function() {
              //Horizontal Tab
              $('#parentHorizontalTab').easyResponsiveTabs({
                  type: 'default', //Types: default, vertical, accordion
                  width: 'auto', //auto or any width like 600px
                  fit: true, // 100% fit in a container
                  tabidentify: 'hor_1', // The tab groups identifier
                  activate: function(event) { // Callback function if tab is switched
                      var $tab = $(this);
                      var $info = $('#nested-tabInfo');
                      var $name = $('span', $info);
                      $name.text($tab.text());
                      $info.show();
                  }
              });

              // Child Tab
              $('#ChildVerticalTab_1').easyResponsiveTabs({
                  type: 'vertical',
                  width: 'auto',
                  fit: true,
                  tabidentify: 'ver_1', // The tab groups identifier
                  activetab_bg: '#fff', // background color for active tabs in this group
                  inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                  active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                  active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
              });

              //Vertical Tab
              $('#parentVerticalTab').easyResponsiveTabs({
                  type: 'vertical', //Types: default, vertical, accordion
                  width: 'auto', //auto or any width like 600px
                  fit: true, // 100% fit in a container
                  closed: 'accordion', // Start closed if in accordion view
                  tabidentify: 'hor_1', // The tab groups identifier
                  activate: function(event) { // Callback function if tab is switched
                      var $tab = $(this);
                      var $info = $('#nested-tabInfo2');
                      var $name = $('span', $info);
                      $name.text($tab.text());
                      $info.show();
                  }
              });
          });
     $(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
    $(document)
    .ready(function() {
      $('.special.card .image').dimmer({
        on: 'hover'
      });
      $('.star.rating')
        .rating()
      ;
      $('.card .dimmer')
        .dimmer({
          on: 'hover'
        })
      ;
    })
  ;
     $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
//<![CDATA[
$(function(){
 $('#t').t({
  
  delay:2,                   // start delay in seconds [default:0]
  
  speed:50,                  // typing speed (ms) [default:50]
  speed_vary:true,          // 'human like' speed variation [default:false]
  
  beep:false,                 // beep while typing (Web Audio API) [default:false]
  
  mistype:3,                 // mistype rate: 1:N per char [default:false]
  locale:'en',               // keyboard layout (to fit mistype); supported: 'en' (english) or 'de' (german) [default:'en']
  
  caret:'\u2589',            // caret content; can be html too [default:true (\u258e)]
  blink:true,                // blink-interval in ms; if TRUE, speed*3  [default:true]
  blink_perm:false,          // permanent blinking? if FALSE, caret blinks only on delay/pause/finish [default:false]
  repeat:0,                  // repeat typing: if TRUE, infinite or N times [default:0]
  tag:'span',                // wrapper tag (.t-container, .t-caret) [default:'span']
  pause_on_click:true,       // pauses/continues typing on click/tap (elm) [default:false]
  pause_on_tab_switch:true,  // pauses typing if window is inactive (Page Visibility API) [default:false]
  
  // init callback (ready-to-type)
  init:function(elm){},        
  // typing callback
  typing:function(elm,chr_or_elm,left,total){},
  // finished callback
  fin:function(elm){}          
 
 });
/*
        
Methods
  $(elm).t('add',content);         // adds content; shorthand: $(elm).a(content);
  $(elm).t('queue',content);       // queued type processing; shorthand: $(elm).q(content);
  $(elm).t('pause'[,true/false]);  // pauses typing (toggles if 2nd param omitted); shorthand: $(elm).p([true/false]);
  $(elm).t('beep');                // manual beepin' (initialised/not-typing); shorthand: $(elm).b();
  $(elm).t('speed',ms);            // typing speed change at runtime; shorthand: $(elm).s(ms);
  $(elm).t_off([true]);            // destroys typer's instance; if TRUE, also clears content; shorthand: n/a
Data/properties
  $(elm).data().t;                 // TRUE if initialised
  $(elm).data().is_typing;                 // typing
  $(elm).data().paused;                    // paused
# How to stop caret blinking? (e.g., if finished)
 -> https://github.com/mntn-dev/t.js/issues/5#issuecomment-340739907
# Hint: unset default/unwatend styles via CSS
 ins,del{text-decoration:none;}
 kbd{font-family:inherit;}
 s{display:none;}
 [...]
--------
# "Hypertyping Markup Language" Cheatsheet:
<del>*</del> -> clears everything typed before (still stored in case of repeating [repeat:N])
<del>foo</del> -> deletes 'foo' (by default, t.js delays 0.25s before removing)
<del>foo<ins>2</ins></del> -> custom del-delay: numeric-filled <ins> inside <del>
<del>select me<s>red,white</s></del> -> text selection: <s> inside <del> (comma seperated background/forground color values, or .class name)
(!) Note: except <ins> and <s>, <del> doesn't handle nested html-tags (dropped)
<ins>2.5</ins> -> stops typing for 2.5 seconds (numeric-filled)
<ins>content to <u>insert</u></ins> -> inserts instantly (non-numeric)
<kbd>some <strong>typing text</strong></kbd> -> will apply setting's mistype[=1:N] rate here (will be 10 if unset)
<s>20</s> -> changes typing speed to 20 milliseconds
*/
  
});
//]]>
$(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'userid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
</script>