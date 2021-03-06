/**
 * Create and register the controllers submodule of the phoMart module.
 * Submodule controllers are defined in the following files (relative to 
 * phoMart directory): 
 *
 * client/controllers/checkoutController.js
 * client/controllers/homeController.js
 * client/controllers/navController.js
 * client/controllers/paymentFormController.js
 * client/controllers/orderConfirmationController.js
 * 
 * angular.module is used to create, register and retrieve application 
 * modules in an Angular application - all modules are registered with 
 * angular.module. The latter takes two parameters, the second optional. 
 * If the second parameter is omitted, an existing module is retrieved 
 * (getter). If it is provided, a new module is created and registered 
 * (setter). 
 */
angular.module('phoMart.controllers', []);