console.log('datamodel1');

(function (compId) {
    var _ = null, y = true, n = false,
        x12 = 'break-word', x13 = 'nowrap', x2 = '5.0.0', x4 = 'rgba(0,0,0,0)', x1 = '5.0.1',
        g = 'image', e37 = '${Ethernet-FrameCopy4}', b = 'block', x16 = 'none solid rgb(0, 0, 0)',
        x = 'text', m = 'rect', i = 'none', x8 = 'rgba(192,192,192,1)', x3 = '5.0.1.386', p = 'px',
        e36 = '${Ethernet-Frame}', x25 = '700', l = 'normal', d = 'display', e38 = '${switch_table}',
        x29 = 'none solid rgb(78, 201, 30)', x27 = '600', x35 = 'rgba(255,255,255,1)', x24 = '14',
        x10 = '24', x15 = '400', x11 = 'Arial, Helvetica, sans-serif', xc = 'rgba(0,0,0,1)',
        x19 = '12';

    var g33 = 'Ethernet-Frame.png', g6 = 'Switch.PNG', g34 = 'switch%20table.PNG', g5 = 'PC1.PNG',
        g7 = 'Line.PNG';

    var s14 = "Pause/Resume", s18 = "PC1", s32 = "1", s30 = "3", s26 = "Hover over each device or press the Pause/Resume button to see the MAC addresses.",
        s21 = "PC3", s20 = "PC2 ", s22 = "Switch", s23 = "PC1 can send data to PC2 and PC3. The data is encapsulated in the Ethernet Frame.<br><br>See 'Ethernet Frame Structure' below for more details.",
        s31 = "2", s28 = "The switch stores and forwards the frames received. It examines the incoming MAC addresses and selectively forwards the frame to a link.",
        s9 = "Play", s17 = "Stop";

    var im = 'images/', aud = 'media/', vid = 'media/', js = 'js/', fonts = {},
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [], scripts = [];

    var symbols = {
        "stage": {
            v: x1, mv: x2, b: x3, stf: i, cg: i, rI: n,
            cn: {
                dom: [
                    {
                        id: 'DataModel1', t: 'group', r: ['10px', '-3px', '587px', '370px', 'auto', 'auto'],
                        c: [
                            { id: 'PC2', t: g, r: ['66px', '173px', '73px', '59px', 'auto', 'auto'], f: [x4, im + g5, '0px', '0px'] },
                            { id: 'PC3', t: g, r: ['62px', '291px', '73px', '59px', 'auto', 'auto'], f: [x4, im + g5, '0px', '0px'] },
                            { id: 'PC1', t: g, r: ['66px', '46px', '73px', '59px', 'auto', 'auto'], f: [x4, im + g5, '0px', '0px'] },
                            { id: 'Switch', t: g, r: ['372px', '188px', '63px', '30px', 'auto', 'auto'], f: [x4, im + g6, '0px', '0px'] },
                            { id: 'Line', t: g, r: ['125px', '131px', '265px', '13px', 'auto', 'auto'], f: [x4, im + g7, '0px', '0px'], tf: [[], ['19']] },
                            { id: 'Line2', t: g, r: ['130px', '203px', '250px', '13px', 'auto', 'auto'], f: [x4, im + g7, '0px', '0px'] },
                            { id: 'Line3', t: g, r: ['118px', '269px', '273px', '13px', 'auto', 'auto'], f: [x4, im + g7, '0px', '0px'], tf: [[], ['-22']] }
                        ]
                    },
                    { id: 'PlayButton', t: m, r: ['330px', '412px', '63px', '30px', 'auto', 'auto'], br: ["10px", "10px", "10px", "10px"], f: [x8], s: [0, xc, i], c: [{ id: 'Play', t: x, r: ['8px', '2px', 'auto', 'auto', 'auto', 'auto'], text: s9, n: [x11, [x10], xc, l, i, "", x12, x13] }] },
                    { id: 'PauseButton', t: m, r: ['400px', '412px', '173px', '30px', 'auto', 'auto'], br: ["10px", "10px", "10px", "10px"], f: [x8], s: [0, "rgb(0, 0, 0)", i], c: [{ id: 'Pause', t: x, r: ['6px', '2px', '172px', '25px', 'auto', 'auto'], text: s14, align: "left", n: [x11, [x10, p], xc, x15, x16, l, x12, ""] }] },
                    { id: 'StopButton', t: m, r: ['578px', '412px', '63px', '30px', 'auto', 'auto'], br: ["10px", "10px", "10px", "10px"], f: [x8], s: [0, "rgb(0, 0, 0)", i], c: [{ id: 'Stop', t: x, r: ['7px', '0px', 'auto', 'auto', 'auto', 'auto'], text: s17, align: "left", n: [x11, [x10, p], xc, x15, x16, l, x12, x13] }] },
                    { id: 'PC1_info', t: x, r: ['82px', '108px', '108px', '52px', 'auto', 'auto'], text: s18, align: "left", n: [x11, [x19, p], xc, x15, x16, l, x12, l] },
                    { id: 'PC2_info', t: x, r: ['85px', '229px', '119px', '52px', 'auto', 'auto'], text: s20, align: "left", n: [x11, [x19, p], xc, x15, x16, l, x12, l] },
                    { id: 'PC3_info', t: x, r: ['87px', '347px', '135px', '52px', 'auto', 'auto'], text: s21, align: "left", n: [x11, [x19, p], xc, x15, x16, l, x12, l] },
                    { id: 'Switch_info', t: x, r: ['405px', '215px', '46px', '14px', 'auto', 'auto'], text: s22, align: "left", n: [x11, [x19, p], xc, x15, x16, l, x12, l] },
                    { id: 'Model_Detail', t: x, r: ['336px', '6px', '261px', '105px', 'auto', 'auto'], text: s23, align: "left", n: [x11, [x24, p], "rgba(78,201,30,1.00)", x25, i, l, x12, l] },
                    { id: 'Text4Copy', t: x, r: ['4px', '404px', '318px', '46px', 'auto', 'auto'], text: s26, align: "left", n: [x11, [x24, p], "rgba(50,23,191,1.00)", x27, x16, l, x12, l] },
                    { id: 'Text', t: x, r: ['272px', '314px', '294px', '85px', 'auto', 'auto'], text: s28, align: "left", n: [x11, [x24, p], "rgba(201,99,29,1.00)", x25, x29, l, x12, l] },
                    { id: 'Text2', t: x, r: ['338px', '142px', '261px', '85px', 'auto', 'auto'], text: s30, align: "left", n: [x11, [x24, p], "rgba(255,255,255,1)", x25, x16, l, x12, l] },
                    { id: 'Ethernet-Frame', t: g, r: ['8px', '499px', '237px', '34px', 'auto', 'auto'], f: [x4, im + g33, '0px', '0px'] },
                    { id: 'TextCopy', t: x, r: ['255px', '480px', '248px', '67px', 'auto', 'auto'], text: s31, align: "left", n: [x11, [x24, p], "rgba(255,255,255,1)", x25, x29, l, x12, l] }
                ]
            }
        }
    };



    window.onload = function () {
        console.log('hereeee1111')
        AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

        if (!window.edge_authoring_mode) {
            console.log('hereeee321321')
            AdobeEdge.getComposition(compId).load("DataModel1_edge.js");
        }
    };
        if (!window.edge_authoring_mode) {
            console.log(AdobeEdge.getComposition());
// myElement.load();
            AdobeEdge.getComposition(compId).load("DataModel1_edge.js"); }

})("EDGE-111764734");
