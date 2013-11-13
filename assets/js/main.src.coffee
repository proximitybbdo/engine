window.BBDO ?= {
  Events: {},
}

class BBDO.Site
  current_page: null

  constructor: ->
    @route($('body[data-page]').attr('data-page'))

    @init_events()
    @init_shared()

  init_events: ->
    $(document).on 'goto', @goto

  goto: (e, page) ->
    document.location = window.base_url + page

  route: (page) ->
    switch page
      when ''
        @current_page = new BBDO.Index()
      else
        @current_page = new BBDO.Base()

  init_shared: ->

$(document).ready ->
  window.site.app = new BBDO.Site()

class BBDO.Base
  constructor: () ->
    # niets

class BBDO.Index extends BBDO.Base
  constructor: () ->
    super()
