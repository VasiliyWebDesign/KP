'use strict';

var _namer = require('./namer2');

var _namer2 = _interopRequireDefault(_namer);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var person = new _namer2.default();
console.log(person.getFullName());