(function() {
  'use strict';

  angular
    .module('poppygp.components')
    .directive('gpVideo', gpVideoDirective);


  /* @ngInject */
  function gpVideoDirective() {

    var directive = {
      restrict    : 'E',
      transclude  : true,
      replace     : false,
      link        : link,
      scope: {
        channelId   : '=channelId'
      },
      templateUrl : 'app/components/video/video.html'
    };

    return directive;

    function link(scope, element, attrs) {
      scope.videoSrc = 'http://www.ustream.tv/embed/' + scope.channelId + '?html5ui';
      attrs.$set('src', scope.videoSrc);
    }

  }

})();