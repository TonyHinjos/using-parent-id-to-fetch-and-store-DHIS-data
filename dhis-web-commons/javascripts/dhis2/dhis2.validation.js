"use strict";

/*
 * Copyright (c) 2004-2014, University of Oslo
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * Redistributions of source code must retain the above copyright notice, this
 * list of conditions and the following disclaimer.
 *
 * Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 * Neither the name of the HISP project nor the names of its contributors may
 * be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

dhis2.util.namespace('dhis2.validation');

/**
 * Checks if the given value is valid zero.
 */
dhis2.validation.isValidZeroNumber = function(value) {
  var regex = /^0(\.0*)?$/;
  return regex.test(value);
};

/**
 * Allow only integers or a single zero and no thousands separators.
 */
dhis2.validation.isInt = function(value) {
  var regex = /^(0|-?[1-9]\d*)$/;
  return regex.test(value);
};

/**
 * Allow only integers inclusive between 0 and 100. 
 */
dhis2.validation.isPercentage = function(value) {
  return dhis2.validation.isInt(value) && parseInt(value) >= 0 && parseInt(value) <= 100;
}

/**
 * Allow only positive integers, not zero, no thousands separators.
 */
dhis2.validation.isPositiveInt = function(value) {
  var regex = /^[1-9]\d*$/;
  return regex.test(value);
};

/**
 * Allow only zero or positive integers, no thousands separators.
 */
dhis2.validation.isZeroOrPositiveInt = function(value) {
  var regex = /(^0$)|(^[1-9]\d*$)/;
  return regex.test(value);
};

/**
 * Allow only negative integers, not zero and no thousands separators.
 */
dhis2.validation.isNegativeInt = function(value) {
  var regex = /^-[1-9]\d*$/;
  return regex.test(value);
};

/**
 * Allow any real number,optionally with a sign, no thousands separators and a
 * single decimal point.
 */
dhis2.validation.isNumber = function(value) {
  var regex = /^(-?0|-?[1-9]\d*)(\.\d+)?(E\d+)?$/;
  return regex.test(value);
};

/**
 * Checks if the given value is a valid positive number.
 */
dhis2.validation.isPositiveNumber = function(value) {
  return dhis2.validation.isNumber(value) && parseFloat(value) > 0;
};

/**
 * Checks if the given value is a valid negative number.
 */
dhis2.validation.isNegativeNumber = function(value) {
  return dhis2.validation.isNumber(value) && parseFloat(value) < 0;
};

/**
 * Returns true if the provided string argument is to be considered a unit
 * interval, which implies that the value is numeric and inclusive between 0
 * and 1.
 */
dhis2.validation.isUnitInterval = function(value) {
  if( !dhis2.validation.isNumber(value) ) {
    return false;
  }

  var f = parseFloat(value);

  return f >= 0 && f <= 1;
};
