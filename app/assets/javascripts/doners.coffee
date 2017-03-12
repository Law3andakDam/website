toggleSubmitBtn = ->
  if $('#agree_to_terms').is(':checked')
    $('#create_doner').removeAttr 'disabled'
  else
    $('#create_doner').attr 'disabled', 'disabled'
  return

$(document).on 'turbolinks:load', ->
  toggleSubmitBtn()
  $('#agree_to_terms').change toggleSubmitBtn
  return
