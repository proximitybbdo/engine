window.BBDO ?= {
  Events: {}
}

String.prototype.capitalize = () ->
  @charAt(0).toUpperCase() + @slice(1)

class BBDO.Site
  current_page: null
  $el: null

  constructor: (@$el) ->
    @route @$el.data('page')

    @init_events()
    @init_shared()

  init_events: ->
    $(document).on 'goto', @goto

  goto: (e, page) ->
    document.location = window.base_url + page

  route: (page) ->
    if page is "" then page = "index"
    if typeof BBDO[page.capitalize()] is "function"
      @current_page = new BBDO[page.capitalize()]()
    else
      @current_page = new BBDO.Base

  init_shared: ->

$ ->
  window.site.app = new BBDO.Site $('body')
