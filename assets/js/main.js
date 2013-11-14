(function() {
  var __hasProp = {}.hasOwnProperty,
    __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

  if (window.BBDO == null) {
    window.BBDO = {
      Events: {}
    };
  }

  BBDO.Site = (function() {
    Site.prototype.current_page = null;

    Site.prototype.$el = null;

    function Site($el) {
      this.$el = $el;
      this.route(this.$el.data('page'));
      this.init_events();
      this.init_shared();
    }

    Site.prototype.init_events = function() {
      return $(document).on('goto', this.goto);
    };

    Site.prototype.goto = function(e, page) {
      return document.location = window.base_url + page;
    };

    Site.prototype.route = function(page) {
      switch (page) {
        case '':
          return this.current_page = new BBDO.Index();
        default:
          return this.current_page = new BBDO.Base();
      }
    };

    Site.prototype.init_shared = function() {};

    return Site;

  })();

  $(document).ready(function() {
    return window.site.app = new BBDO.Site($('body'));
  });

  BBDO.Base = (function() {
    function Base() {}

    return Base;

  })();

  BBDO.Index = (function(_super) {
    __extends(Index, _super);

    function Index() {
      Index.__super__.constructor.call(this);
    }

    return Index;

  })(BBDO.Base);

}).call(this);

/*
//@ sourceMappingURL=main.js.map
*/