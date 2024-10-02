console.log('datamodel1');

(function(compId) {
    var _ = null,
        y = true,
        n = false;
    var im = 'images/',
        aud = 'media/',
        vid = 'media/',
        js = 'js/',
        fonts = {},
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [],
        scripts = [];

    var symbols = {
        "stage": {
            v: "5.0.1",
            mv: "5.0.0",
            b: "5.0.1.386",
            stf: "none",
            cg: "none",
            rI: n,
            cn: {
                dom: [
                    {
                        id: 'DataModel1',
                        t: 'group',
                        r: ['10px', '-3px', '587px', '370px', 'auto', 'auto'],
                        c: [
                            { id: 'PC2', t: 'image', r: ['66px', '173px', '73px', '59px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'PC1.PNG', '0px', '0px'] },
                            { id: 'PC3', t: 'image', r: ['62px', '291px', '73px', '59px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'PC1.PNG', '0px', '0px'] },
                            { id: 'PC1', t: 'image', r: ['66px', '46px', '73px', '59px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'PC1.PNG', '0px', '0px'] },
                            { id: 'Switch', t: 'image', r: ['372px', '188px', '63px', '30px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'Switch.PNG', '0px', '0px'] },
                            { id: 'Line', t: 'image', r: ['125px', '131px', '265px', '13px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'Line.PNG', '0px', '0px'], tf: [[], ['19']] },
                            { id: 'Line2', t: 'image', r: ['130px', '203px', '250px', '13px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'Line.PNG', '0px', '0px'] },
                            { id: 'Line3', t: 'image', r: ['118px', '269px', '273px', '13px', 'auto', 'auto'], f: ['rgba(0,0,0,0)', im + 'Line.PNG', '0px', '0px'], tf: [[], ['-22']] }
                        ]
                    },
                    {
                        id: 'PlayButton',
                        t: 'rect',
                        r: ['330px', '412px', '63px', '30px', 'auto', 'auto'],
                        br: ["10px", "10px", "10px", "10px"],
                        f: ['rgba(192,192,192,1)'],
                        s: [0, 'rgba(0,0,0,1)', 'none'],
                        c: [
                            { id: 'Play', t: 'text', r: ['8px', '2px', 'auto', 'auto', 'auto', 'auto'], text: 'Play', n: ['Arial, Helvetica, sans-serif', [24, 'px'], 'rgba(0,0,0,1)', 'normal', 'none', '', 'break-word', 'nowrap'] }
                        ]
                    },
                    {
                        id: 'PauseButton',
                        t: 'rect',
                        r: ['400px', '412px', '173px', '30px', 'auto', 'auto'],
                        br: ["10px", "10px", "10px", "10px"],
                        f: ['rgba(192,192,192,1)'],
                        s: [0, 'rgba(0,0,0,1)', 'none'],
                        c: [
                            { id: 'Pause', t: 'text', r: ['6px', '2px', '172px', '25px', 'auto', 'auto'], text: 'Pause/Resume', align: 'left', n: ['Arial, Helvetica, sans-serif', [24, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', ''] }
                        ]
                    },
                    {
                        id: 'StopButton',
                        t: 'rect',
                        r: ['578px', '412px', '63px', '30px', 'auto', 'auto'],
                        br: ["10px", "10px", "10px", "10px"],
                        f: ['rgba(192,192,192,1)'],
                        s: [0, 'rgba(0,0,0,1)', 'none'],
                        c: [
                            { id: 'Stop', t: 'text', r: ['7px', '0px', 'auto', 'auto', 'auto', 'auto'], text: 'Stop', align: 'left', n: ['Arial, Helvetica, sans-serif', [24, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'nowrap'] }
                        ]
                    },
                    {
                        id: 'PC1_info',
                        t: 'text',
                        r: ['82px', '108px', '108px', '52px', 'auto', 'auto'],
                        text: 'PC1',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [12, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'PC2_info',
                        t: 'text',
                        r: ['85px', '229px', '119px', '52px', 'auto', 'auto'],
                        text: 'PC2',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [12, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'PC3_info',
                        t: 'text',
                        r: ['87px', '347px', '135px', '52px', 'auto', 'auto'],
                        text: 'PC3',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [12, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'Switch_info',
                        t: 'text',
                        r: ['405px', '215px', '46px', '14px', 'auto', 'auto'],
                        text: 'Switch',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [12, 'px'], 'rgba(0,0,0,1)', '400', 'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'Model_Detail',
                        t: 'text',
                        r: ['336px', '6px', '261px', '105px', 'auto', 'auto'],
                        text: 'PC1 can send data to PC2 and PC3. The data is encapsulated in the Ethernet Frame.<br><br>See "Ethernet Frame Structure" below for more details.',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(78,201,30,1.00)', '700', 'none', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'Text4Copy',
                        t: 'text',
                        r: ['4px', '404px', '318px', '46px', 'auto', 'auto'],
                        text: 'Hover over each device or press the Pause/Resume button to see the MAC addresses.',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(50,23,191,1.00)', '600',
                        'none solid rgb(0, 0, 0)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'Text',
                        t: 'text',
                        r: ['272px', '314px', '294px', '85px', 'auto', 'auto'],
                        text: 'The switch stores and forwards the frames received. It examines the incoming MAC addresses and selectively forwards the frame to a link.',
                        align: 'left',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(201,99,29,1.00)', '700', 'none solid rgb(78, 201, 30)', 'normal', 'break-word', 'normal']
                    },
                    {
                        id: 'TextCopy',
                        t: 'text',
                        r: ['261px', '280px', '12px', '16px', 'auto', 'auto'],
                        text: '3',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(0,0,0,1)', 'normal', 'none', '', 'break-word', 'normal']
                    },
                    {
                        id: 'TextCopy2',
                        t: 'text',
                        r: ['253px', '192px', '12px', '16px', 'auto', 'auto'],
                        text: '2',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(0,0,0,1)', 'normal', 'none', '', 'break-word', 'normal']
                    },
                    {
                        id: 'TextCopy3',
                        t: 'text',
                        r: ['261px', '114px', '12px', '16px', 'auto', 'auto'],
                        text: '1',
                        n: ['Arial, Helvetica, sans-serif', [14, 'px'], 'rgba(0,0,0,1)', 'normal', 'none', '', 'break-word', 'normal']
                    },
                    {
                        id: 'Ethernet-Frame',
                        v: 'block',
                        t: 'image',
                        r: ['367px', '165px', '94px', '68px', 'auto', 'auto'],
                        f: ['rgba(0,0,0,0)', im + 'Ethernet-Frame.png', '0px', '0px']
                    },
                    {
                        id: 'Ethernet-FrameCopy4',
                        v: 'none',
                        t: 'image',
                        r: ['61px', '288px', '94px', '68px', 'auto', 'auto'],
                        f: ['rgba(0,0,0,0)', im + 'Ethernet-Frame.png', '0px', '0px']
                    },
                    {
                        id: 'switch_table',
                        v: 'none',
                        t: 'image',
                        r: ['451px', '170px', '199px', '103px', 'auto', 'auto'],
                        f: ['rgba(0,0,0,0)', im + 'switch%20table.PNG', '0px', '0px']
                    }
                ],
                style: {
                    '${Stage}': {
                        isStage: true,
                        r: ['null', 'null', '650px', '450px', 'auto', 'auto'],
                        overflow: 'visible',
                        f: ['rgba(255,255,255,1)']
                    }
                }
            },
            tt: {
                d: 11000,
                a: n,
                l: { "animation": 0, "end": 11000 },
                data: [
                    ["eid80", "display", 6000, 0, "linear", "${Ethernet-Frame}", 'block', 'none'],
                    ["eid77", "display", 11000, 0, "linear", "${Ethernet-Frame}", 'none', 'none'],
                    ["eid75", "display", 0, 0, "linear", "${Ethernet-FrameCopy4}", 'none', 'none'],
                    ["eid76", "display", 6000, 0, "linear", "${Ethernet-FrameCopy4}", 'none', 'block'],
                    ["eid74", "display", 11000, 0, "linear", "${Ethernet-FrameCopy4}", 'block', 'none'],
                    ["eid49", "location", 0, 5000, "linear", "${Ethernet-Frame}", [[113, 85, 0, 0, 0, 0, 0], [414, 199, 0, 0, 0, 0, 321.86]]],
                    ["eid50", "location", 5000, 1000, "linear", "${Ethernet-Frame}", [[414, 199, 0, 0, 0, 0, 0], [416, 207, 0, 0, 0, 0, 8.25]]],
                    ["eid79", "display", 0, 0, "linear", "${switch_table}", 'none', 'none'],
                    ["eid78", "display", 11000, 0, "linear", "${switch_table}", 'none', 'none'],
                    ["eid73", "location", 6000, 5000, "linear", "${Ethernet-FrameCopy4}", [[416, 207, 0, 0, 0, 0, 0], [108, 325, 0, 0, 0, 0, 329.83]]]
                ]
            }
        }
    };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);
})("EDGE-15569127");

(function($, Edge, compId) {
    var Composition = Edge.Composition,
        Symbol = Edge.Symbol;

    Edge.registerEventBinding(compId, function($) {
        (function(symbolName) {
            Symbol.bindElementAction(compId, symbolName, "${Play}", "click", function(sym, e) {
                sym.play("animation");
            });

            Symbol.bindElementAction(compId, symbolName, "${PlayButton}", "click", function(sym, e) {
                sym.play("animation");
            });

            Symbol.bindElementAction(compId, symbolName, "${PauseButton}", "click", function(sym, e) {
                if (sym.isPlaying("ethernet-frame")) {
                    sym.stop();
                    sym.$("PC1_info").html("1A:23:F9:CD:06:9B ");
                    sym.$("PC2_info").html("5C:66:AB:90:75:B1");
                    sym.$("PC3_info").html("49:BD:D2:C7:56:2A");
                    sym.$("switch_table").show();
                } else {
                    sym.play();
                    sym.$("PC1_info").html("PC1");
                    sym.$("PC2_info").html("PC2");
                    sym.$("PC3_info").html("PC3");
                    sym.$("switch_table").hide();
                }
            });

            Symbol.bindElementAction(compId, symbolName, "${StopButton}", "click", function(sym, e) {
                sym.stop("end");
            });

            Symbol.bindElementAction(compId, symbolName, "${Stop}", "click", function(sym, e) {
                sym.stop("end");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC1}", "mouseover", function(sym, e) {
                sym.$("PC1_info").html("1A:23:F9:CD:06:9B ");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC1}", "mouseout", function(sym, e) {
                sym.$("PC1_info").html("PC1");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC2}", "mouseover", function(sym, e) {
                sym.$("PC2_info").html("5C:66:AB:90:75:B1");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC2}", "mouseout", function(sym, e) {
                sym.$("PC2_info").html("PC2");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC3}", "mouseover", function(sym, e) {
                sym.$("PC3_info").html("49:BD:D2:C7:56:2A");
            });

            Symbol.bindElementAction(compId, symbolName, "${PC3}", "mouseout", function(sym, e) {
                sym.$("PC3_info").html("PC3");
            });

            Symbol.bindElementAction(compId, symbolName, "${Switch}", "mouseover", function(sym, e) {
                sym.$("switch_table").show();
            });

            Symbol.bindElementAction(compId, symbolName, "${Switch}", "mouseout", function(sym, e) {
                sym.$("switch_table").hide();
            });
        })("stage");
    });
})(AdobeEdge.$, AdobeEdge, "EDGE-15569127");
