$(".i").cycle({

        fx:      'fade',

        timeout:  0,

        prev:    '.voltar',

        next:    '.passar',

        pager:   '#nav',

        pagerAnchorBuilder: pagerFactory

    });



    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';

        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';

    };