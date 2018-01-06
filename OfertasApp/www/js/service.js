angular.module('service',[])
    .service('webservice', function(){
        var _getOfertas = function(){
            return [{
                id:'1',
                titulo:'Cerveja',
                descricao:'Cerveja artezanal',
                valor:4.45,
                valor_f:'R$ 4,45',
                validade:'2018-12-22',
                imagem:'https://www.shareicon.net/download/2016/09/09/827452_commerce_512x512.png'
            },{
                id:'2',
                titulo:'Guarana',
                descricao:'Guarana de rolha',
                valor:4.50,
                valor_f:'R$ 4,50',
                validade:'2018-12-22',
                imagem:'https://www.shareicon.net/download/2016/09/09/827452_commerce_512x512.png'
            }];
        };

        return {
            getOfertas: _getOfertas
        };

})