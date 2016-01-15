(function() {
  'use strict';

  angular
    .module('poppygp.components')
    .directive('gpPlayer', gpPlayerDirective);


  /* @ngInject */
  function gpPlayerDirective() {

    var directive = {
      restrict    : 'E',
      transclude  : true,
      replace     : true,
      link        : link,
      scope: {
        channelId   : '=channelId'
      },
      templateUrl : 'app/components/player/player.html'
    };

    return directive;

    function link(scope, element, attrs) {
      scope.videoSrc = 'http://www.ustream.tv/embed/' + scope.channelId + '?html5ui';
      attrs.$set('src', scope.videoSrc);
    }

  }

})();