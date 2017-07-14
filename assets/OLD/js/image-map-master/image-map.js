/**
 *
 * Image-Map v1.0.3 (https://www.travismclarke.com)
 * Copyright 2016 Travis Clarke
 * License: MIT
 *
 * @preserve
 */

;(function (root, factory) {
    if ((!(window && window.document) && !(root && root.document))) {
        throw new Error("ImageMap requires a window with a document");
    }
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['exports', 'jquery'], factory);
    } else if (typeof exports === 'object' && typeof exports.nodeName !== 'string') {
        // CommonJS
        factory(exports, require('jquery'));
    } else {
        // Browser globals
        factory(root, root.jQuery);
    }
}(this, function (exports, $) {
    'use strict';

    var ImageMap = function (selector) {
        var self = this;

        if (!self) { return new ImageMap(selector); }

        self.selector = selector instanceof $ ? selector.toArray() : [].slice.call(document.querySelectorAll(selector));

        (self.update = function () {
            self.selector.forEach(function (val) {
                var img = val,
                    newImg = document.createElement('img');

                if (typeof img.getAttribute('usemap') === 'undefined') { return; }

                newImg.addEventListener('load', function () {
                    var clone = new Image();
                    clone.src = img.getAttribute('src');

                    var w = img.getAttribute('width') || clone.width,
                        h = img.getAttribute('height') || clone.height,
                        wPercent = img.offsetWidth / 100,
                        hPercent = img.offsetHeight / 100,
                        map = img.getAttribute('usemap').replace('#', ''),
                        c = 'coords';

                    [].forEach.call(document.querySelectorAll('map[name="' + map + '"] area'), function (val) {
                        var area = val,
                            coordsS = area.dataset[c] = area.dataset[c] || area.getAttribute(c),
                            coordsA = coordsS.split(','),
                            coordsPercent = Array.apply(null, Array(coordsA.length));

                        coordsPercent.forEach(function (val, i) {
                            coordsPercent[i] = i % 2 === 0 ? Number(((coordsA[i] / w) * 100) * wPercent) : Number(((coordsA[i] / h) * 100) * hPercent);
                        });
                        area.setAttribute(c, coordsPercent.toString());
                    });
                });
                newImg.setAttribute('src', img.getAttribute('src'));
            });
        })();

        window.addEventListener('resize', self.update);
        /*document.getElementById("buscandoelnorte-capitulo01-1024").addEventListener("click", self.update);
        document.getElementById("buscandoelnorte-capitulo02-1024").addEventListener("click", self.update);
        document.getElementById("buscandoelnorte-capitulo03-1024").addEventListener("click", self.update);
        document.getElementById("travelgrafia-region-5").addEventListener("click", self.update);
        document.getElementById("travelgrafia-region-6").addEventListener("click", self.update);
        document.getElementById("travelgrafia-region-7").addEventListener("click", self.update);
        document.getElementById("exploremos-open-colombia-description").addEventListener("click", self.update);*/

        return self;
    };

    $.fn.imageMap = function () {
        var self = this;
        return new ImageMap(self);
    };

    exports.default = exports.ImageMap = ImageMap;
}));