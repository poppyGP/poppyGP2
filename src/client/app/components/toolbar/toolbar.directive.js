(function() {
  'use strict';

  angular
    .module('poppygp.components')
    .directive('gpToolbar', gpToolbarDirective);


  /* @ngInject */
  function gpToolbarDirective($log) {

    var directive = {
      restrict    : 'E',
      replace     : true,
      transclude  : true,
      templateUrl : 'app/components/toolbar/toolbar.html'
    };
    return directive;

  }

})();