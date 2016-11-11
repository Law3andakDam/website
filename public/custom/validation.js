// Add New Team Role Validation
$(function(){

  /* Start Characters and numonly */
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters"); 
  /* End Characters only */

   $("#add-role-form").validate({
      rules: {
      	role:{
      		required : true,
          lettersonly:true ,
      	}
      },

      messages:{
      	role:{
      		required : 'This field is required.',
        
      	}
      },
      highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function(element) {
        //$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-group').removeClass('has-error');
    }


   });
});

// Add New Blood Type Validation
$(function(){

   $("#add-type-form").validate({
      rules: {
        type:{
          required : true,
          nowhitespace:true,
          minlength: 2,
          maxlength: 3,
        }
      },

      messages:{
        type:{
          required : 'This field is required.',
          nowhitespace:'No white spaces allowable!',
          minlength :'Not matched format!',
          maxlength: 'Not matched format!',
        }
      },
      highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function(element) {
      //$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-group').removeClass('has-error');
    }


   });
}); 


// Add New Blood Type Validation
$(function(){


   $("#add-member-form").validate({
      rules: {
        member_name:{
          required : true,
          lettersonly:true,
       
        },

        member_email:{
          required : true,
          email: true,
          nowhitespace:true,
        },

        member_mobile:{
          required : true,
          minlength: 11,
          maxlength: 11,
          nowhitespace:true,
        },

        member_role:{
          required : true,
      
        },

      },

      messages:{
        member_name:{
          required : 'This field is required.',
        
        },

         member_mobile:{
          required : 'This field is required.',
          minlength :'Required 11 digits, match requested format!',
          maxlength: 'Required 11 digits, match requested format!',
          nowhitespace:'No white spaces allowable!',
     
       
        },

         member_email:{
          required : 'This field is required.',
          email : 'Please enter a <em>valid</em> email adress.',
          nowhitespace:'No white spaces allowable!',
         

        },
      },
      highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function(element) {
        //$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-group').removeClass('has-error');
    }


   });


}); 


// Add New Doner Validation
$(function(){


   $("#add-doner-form").validate({
      rules: {
        doner_email:{
          required : true,
          email: true,
          nowhitespace:true,
       
        },

    
        doner_mobile:{
          required : true,
          minlength: 11,
          maxlength: 11,
          nowhitespace:true,
        },

        blood_type:{
          required : true,
      
        },

        
      },

      messages:{
         doner_name:{
          required : 'This field is required.',
        
        },

         doner_mobile:{
          required : 'This field is required.',
          minlength :'Required 11 digits, match requested format!',
          maxlength: 'Required 11 digits, match requested format!',
          nowhitespace:'No white spaces allowable!',
     
       
        },
        member_email:{
          required : 'This field is required.',
          email : 'Please enter a <em>valid</em> email adress.',
          nowhitespace:'No white spaces allowable!',
         

        },

         
      },
      highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function(element) {
        //$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-group').removeClass('has-error');
    }


   });


}); 
