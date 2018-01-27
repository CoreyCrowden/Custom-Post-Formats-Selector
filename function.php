/**
 * Move the post excerpt before the main WYSIWYG content editor and add a description.
 */
add_action('acf/input/admin_head', function () {

  if ( ('post' == get_current_screen()->id) or ('page' == get_current_screen()->id) or ('portfolio' == get_current_screen()->id) or ('services' == get_current_screen()->id) ) {
    ?>

    <script type="text/javascript">
      jQuery(function ($) {
        $(document).ready(function () {


          /**
           * Move the post excerpt above the main content editor.
           */
          if ($('#postexcerpt').length) {
            // Add description class to default instructions
            $('#postexcerpt .inside p').addClass('description');
            // Add additional instructions
            $('#postexcerpt .inside').prepend("<hr><h3>Excerpt</h3><p>This excerpt is used throughout the website, by search engines and social media. The excerpt is a brief introduction to the article that is will be seen anywhere the post / page appears, <strong>so make sure you add one</strong>.</p>");
            // Move excerpt before main editor
            $('#postdivrich').before($('#postexcerpt .inside').addClass('post-excerpt'));
          }


          /**
           *  Add title before post content editor
           */
          $('#postdivrich').before("<hr><h3>Post Content</h3>");


          /**
           * Add instructions to the tags editor.
           */
          if ($('#tagsdiv-post_tag').length) {
            $('#tagsdiv-post_tag .inside').prepend("<p class='description'>Add tags here that describe the article. If you are utilising automated social media posts these will be used as hashtags.</p>");
          }


          /**
           * Custom Post Format and Page Style Box.
           */
          if ($('#formatdiv').length) {
            // Create the Posts Formats Container
            $('#titlediv').after("<div id='post-formats-container'><div id='feature-post-content'></div></div>");

            // Title
            $('#post-formats-container').before('<hr><h3>Post Format</h3><p class="inside">Select the post format that best suits this post.</p>');

            // Post Formats Select
            $('#post-formats-container').before($('#post-formats-select').addClass('inside'));

            // Page Theme Container
            $('#feature-post-content').append('<div id="page-theme-container"></div>');

            // Page Theme
            $('#page-theme-container').append($("#acf-group_5a0111703564b"));

            // Feature Image
            $('#page-theme-container').append($("#postimagediv").prepend('<h3>Feature Image / Post Thumbnail</h3><p class="description">The feature image is used throughout the website and externally on social media when shared. It is important to include a feature image whenever possible.</p>'));

            // Gallery
            $('#feature-post-content').append($("#acf-group_5a12685b00a02"));

            // Video
            $('#feature-post-content').append($("#acf-group_5a12812cc899f"));

            // Audio
            $('#feature-post-content').append($("#acf-group_5a12a079e27b9"));

            // Link
            $('#feature-post-content').append($("#acf-group_5a12a9082b22e"));
          }


        });
      });
    </script>

    <style type="text/css">

      /**
       * Post Excerpt Styles
       */
      #postexcerpt {
        display: none;
      }
      #excerpt {
        min-height: 10em;
      }

      /**
       * Custom Post Formats Styles
       */
      #formatdiv {
        display: none;
      }
      #post-formats-select input {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
        overflow: hidden;
      }
      #post-formats-select br {
        display: none;
      }
      #post-formats-select label {
        display: inline-block;
        cursor: pointer;
        padding: 6px 12px;
        margin-bottom: 4px;
        border-radius: 2px;

        border: rgba( 0, 0, 0, .05) 1px solid;
        background: rgba(0, 0, 0, .05);
      }
      #post-formats-select label:before {
        color: #414141;
      }
      #post-formats-select label:hover {
        background: rgba(0, 0, 0, .15);
      }
      #post-formats-select label:hover:before {
        color: #222222;
      }
      #post-formats-select input[type="radio"]:checked + label {
        background: rgba(0, 0, 0, .8);
        color: #FFF;
      }
      #post-formats-select input[type="radio"]:checked + label:before {
        color: #e5e5e5;
      }

      #postimagediv .hndle,
      #postimagediv .handlediv,
      #acf-group_5a12685b00a02 .hndle,
      #acf-group_5a12812cc899f .hndle,
      #acf-group_5a12a079e27b9 .hndle,
      #acf-group_5a12a9082b22e .hndle,
      #acf-group_5a0111703564b .hndle{
        display: none;
      }
      @media(min-width: 1134px){
        #page-theme-container {
          max-width: 300px;
        }
      }
      #postimagediv {
        padding-top: 8px;
      }
      #postimagediv > p {
        padding: 0px 12px;
      }
      #feature-post-content {
        display: flex;
        flex-wrap: wrap;
        margin:  0 -1px 18px;
      }
      #feature-post-content .postbox {
        display: inline-block;
        position: relative;
        margin: -1px -1px 0 0;
        flex-grow: 1;
        min-width: 300px;
      }
      #feature-post-content .acf-fields,
      #feature-post-content .acf-field {
        height: 100%;
      }

    </style>

    <?php
  }
});
