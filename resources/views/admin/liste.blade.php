@extends('layouts.app')
@section('title','Résultats Etude')
@section('content')









                                <div class="col-md-10">

                        <div class="col-md-12">
                            <div class="page-header">
                                <h1>
                                    Résultats <small>les résultats de votre étude </small>
                                </h1>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="nouveau_rayon" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="fraicheur" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="produit" ></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="signaletique" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="balance" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="table_prom" ></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="dispo"></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="promo" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="aim" ></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div id="other" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="mdd" ></div>
                                </div>
                                <div class="col-md-4">
                                    <div id="loc" ></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="prix" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                </div>
                                <div class="col-md-6">
                                    <div id="bio" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-2">

                        <div class="page-header">
                            <h1>
                                <small>Remarques particulières </small>

                            </h1>
                        </div>

                        @foreach($messages as $message)
                            <div class="row">{{$message}}</div>
                        @endforeach
                    </div>



                <!--
        </div>
    </div>

-->
<script>
    Highcharts.chart('nouveau_rayon', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Satisfaction<br>nouveau<br>rayon',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$rayon[0]}}],
                ['Assez satisfait',{{$rayon[1]}}],
                ['Satisfait', {{$rayon[2]}}],
                ['Très satisfait',  {{$rayon[3]}}]
            ]
        }]
    });



    Highcharts.chart('fraicheur', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Satisfaction<br>fraicheur',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$fraicheur[0]}}],
                ['Assez satisfait',{{$fraicheur[1]}}],
                ['Satisfait', {{$fraicheur[2]}}],
                ['Très satisfait',  {{$fraicheur[3]}}]

            ]
        }]
    });




    Highcharts.chart('produit', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Qualité<br>produit',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$produit[0]}}],
                ['Assez satisfait',{{$produit[1]}}],
                ['Satisfait', {{$produit[2]}}],
                ['Très satisfait',  {{$produit[3]}}]

            ]
        }]
    });


    Highcharts.chart('signaletique', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Signalétique',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$signal[0]}}],
                ['Assez satisfait',{{$signal[1]}}],
                ['Satisfait', {{$signal[2]}}],
                ['Très satisfait',  {{$signal[3]}}]

            ]
        }]
    });


    Highcharts.chart('balance', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Nouvelles<br>balances',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$balance[0]}}],
                ['Assez satisfait',{{$balance[1]}}],
                ['Satisfait', {{$balance[2]}}],
                ['Très satisfait',  {{$balance[3]}}]

            ]
        }]
    });

    Highcharts.chart('table_prom', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Tables de <br>Promotion',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$tables_prom[0]}}],
                ['Assez satisfait',{{$tables_prom[1]}}],
                ['Satisfait', {{$tables_prom[2]}}],
                ['Très satisfait',  {{$tables_prom[3]}}]

            ]
        }]
    });


    Highcharts.chart('dispo', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Disponibilités  <br>Produits',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$dispo[0]}}],
                ['Assez satisfait',{{$dispo[1]}}],
                ['Satisfait', {{$dispo[2]}}],
                ['Très satisfait',  {{$dispo[3]}}]

            ]
        }]
    });

    Highcharts.chart('promo', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Disponibilités <br>Promotion',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction nouveau rayon',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$promo[0]}}],
                ['Assez satisfait',{{$promo[1]}}],
                ['Satisfait', {{$promo[2]}}],
                ['Très satisfait',  {{$promo[3]}}]

            ]
        }]
    });


    Highcharts.chart('aim', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Amabilité <br>Salarié(e)s',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$aim[0]}}],
                ['Assez satisfait',{{$aim[1]}}],
                ['Satisfait', {{$aim[2]}}],
                ['Très satisfait',  {{$aim[3]}}]

            ]
        }]
    });

    Highcharts.chart('other', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Autres  <br>Magasins',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Oui', {{$other[0]}}],
                ['Non',{{$other[1]}}]


            ]
        }]
    });



    Highcharts.chart('mdd', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Qualité prix <br>MDD',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$mdd[0]}}],
                ['Assez satisfait',{{$mdd[1]}}],
                ['Satisfait', {{$mdd[2]}}],
                ['Très satisfait',  {{$mdd[3]}}]

            ]
        }]
    });


    Highcharts.chart('loc', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Amabilité <br>Salarié(e)s',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$aim[0]}}],
                ['Assez satisfait',{{$aim[1]}}],
                ['Satisfait', {{$aim[2]}}],
                ['Très satisfait',  {{$aim[3]}}]

            ]
        }]
    });



    Highcharts.chart('prix', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Qualité prix <br>Produit',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Pas satisfait', {{$prix[0]}}],
                ['Assez satisfait',{{$prix[1]}}],
                ['Satisfait', {{$prix[2]}}],
                ['Très satisfait',  {{$prix[3]}}]

            ]
        }]
    });



    Highcharts.chart('bio', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Légumes Bio ',
            align: 'center',
            verticalAlign: 'middle',
            y: 40
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: 'Satisfaction',
            innerSize: '50%',
            data: [
                ['Oui', {{$bio[0]}}],
                ['Oui mais il n\'y en pas assez',{{$bio[1]}}],
                ['Non', {{$bio[2]}}]

            ]
        }]
    });

</script>

    @endsection