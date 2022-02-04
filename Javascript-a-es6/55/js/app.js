"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var TAX = 0.2;

function getTax() {
	return TAX;
}

/**
 * @class SexyNumbers
 */

var SexyNumbers = function () {
	function SexyNumbers() {
		_classCallCheck(this, SexyNumbers);
	}

	_createClass(SexyNumbers, null, [{
		key: "multiMax",
		value: function multiMax(first) {
			for (var _len = arguments.length, theRest = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
				theRest[_key - 1] = arguments[_key];
			}

			var sorted = theRest.sort(function (a, b) {
				return b > a;
			}),
			    max = sorted[0];
			return first * max;
		}
	}]);

	return SexyNumbers;
}();

/**
 * @class SexierNumbers
 * @extends {SexyNumbers}
 */


var SexierNumbers = function (_SexyNumbers) {
	_inherits(SexierNumbers, _SexyNumbers);

	function SexierNumbers() {
		_classCallCheck(this, SexierNumbers);

		return _possibleConstructorReturn(this, (SexierNumbers.__proto__ || Object.getPrototypeOf(SexierNumbers)).apply(this, arguments));
	}

	_createClass(SexierNumbers, null, [{
		key: "discount",
		value: function discount(price) {
			var percent = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 100 / 10;
			var tax = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : getTax();

			price = price - price * percent / 100;
			price = price - price * tax;
			return price.toFixed(2);
		}
	}]);

	return SexierNumbers;
}(SexyNumbers);

console.log(SexierNumbers.discount(100));