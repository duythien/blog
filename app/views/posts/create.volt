 {{javascript_include('ckeditor/ckeditor.js')}}
   {{javascript_include('ckeditor/config.js')}}

 {{javascript_include('ckeditor/assets/uilanguages/languages.js')}}
{{form()}}
<div class="hero-unit">
        <h1 style="font-size:38px" class="center">Post pages</h1>
        	<div class="form-group">
    			<label>Titles</label>
    			{{ form.render('title') }}
          {{form.messages('title')}}
 			 </div>
 			<div class="form-group">
 				<label class="control-label">Categories and tag</label>
					
							{{form.render('categoriesId')}}
							              {{form.render('tags')}}

              <span id="count" style="display:none"> </span>
      <script>
        document.write( '<select disabled="disabled" id="languages" onchange="createEditor( this.value );">' );

        // Get the language list from the _languages.js file.
        for ( var i = 0 ; i < window.CKEDITOR_LANGS.length ; i++ ) {
          document.write(
            '<option value="' + window.CKEDITOR_LANGS[i].code + '">' +
              window.CKEDITOR_LANGS[i].name +
            '</option>' );
        }
        document.write( '</select>' );

      </script>
 			</div>
    <div>
    <p>
      {{form.render('content')}}
    </p>
      <div>
      	  {{ submit_button('Save','class':'btn btn-primary') }}
      </div>
          
</div>
</form>
 <script>

      // Set the number of languages.
      document.getElementById( 'count' ).innerHTML = window.CKEDITOR_LANGS.length;

      var editor;

      function createEditor( languageCode ) {
        if ( editor )
          editor.destroy();

        // Replace the <textarea id="editor"> with an CKEditor
        // instance, using default configurations.
        editor = CKEDITOR.replace( 'content', {
          language: languageCode,

          on: {
            instanceReady: function() {
              // Wait for the editor to be ready to set
              // the language combo.
              var languages = document.getElementById( 'languages' );
              languages.value = this.langCode;
              languages.disabled = false;
            }
          }
        });
      }

        // At page startup, load the default language:
        createEditor( '' );

      </script>