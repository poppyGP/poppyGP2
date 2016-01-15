(function() {
  'use strict';

  angular
    .module('poppygp.core')
    .run(runBlock);

  /** @ngInject */
  function runBlock($log) {

    $log.debug('runBlock end');
  }

})();
