var hospital = {
  tps: 0,
  sa: {
    sum: 0,
    uds: 0,
    wds: 0,
    count: 8,
    psi90: { name: "psi90", at: 0.964542, be: 0.709498 },
    hai1: { name: "hai1", at: 0.369, be: 0 },
    hai2: { name: "hai2", at: 0.906, be: 0 },
    hai3: { name: "hai3", at: 0.824, be: 0 },
    hai4: { name: "hai4", at: 0.71, be: 0 },
    hai5: { name: "hai5", at: 0.767, be: 0 },
    hai6: { name: "hai6", at: 0.805, be: 0 },
    pc01: { name: "pc01", at: 0.020408, be: 0 }
  },
  ca: {
    sum: 0,
    uds: 0,
    wds: 0,
    count: 3,
    mort30ami: { name: "mort30ami", at: 0.850916, be: 0.873053 },
    mort30hf: { name: "mort30hf", at: 0.883421, be: 0.907656 },
    mort30pn: { name: "mort30pn", at: 0.88286, be: 0.9079 }
  },
  ef: {
    sum: 0,
    uds: 0,
    wds: 0,
    count: 1,
    mspb1: { name: "mspb1", at: 0.985777, be: 0.832678 }
  },
  hc: {
    name: "hc",
    sum: 0,
    uds: 0,
    wds: 0,
    count: 8,
    cwn: { name: "cwn", fl: 55.27, at: 78.52, be: 86.68 },
    cwd: { name: "cwd", fl: 57.39, at: 80.44, be: 88.51 },
    rohs: { name: "rohs", fl: 38.4, at: 65.08, be: 80.35 },
    ct: { name: "ct", fl: 25.21, at: 51.45, be: 62.44 },
    cam: { name: "cam", fl: 43.43, at: 63.37, be: 73.66 },
    caqohe: { name: "caqohe", fl: 40.05, at: 65.6, be: 79 },
    di: { name: "di", fl: 62.25, at: 86.6, be: 91.63 },
    oroh: { name: "oroh", fl: 37.67, at: 70.23, be: 84.58 }
  }
};
