var fname, lname, gender, position, province, cm, classification, ps, residential, commercial, industrial, agricultural, mineral, timberland, specialc, totalla, plain, upland, mountainous, coastal, east, west, north, south, msl, houshold, families, reference period 11, source of data 11, male 12, female 12, reference period 12, source of data 12, male 13a, female 13a, total 13a, male 13b, female 13b, total 13b, male 13c, female 13c, total 13c, male 13d, female 13d, total 13d, male 13e, female 13e, total 13e, male 13f, female 13f, total 13f, male 13g, female 13g, total 13g, male 14an, female 14an, total 14an, male 14bnm, female 14bnm, total 14bnm, male 14bns, female 14bns, total 14bns, male 14tnc, female 14tnc, total 14tnc;
    function _(x){
      return document.getElementById(x);
    }
    function processPhase1(){
      fname = _("firstname").value;
      lname = _("lastname").value;
      position = _("position").value;
      gender = _("gender").value;
      if (fname.length > 2 && lname.length > 2 && position.length > 2 && gender.length > 2) {
        _("phase1").style.display = "none";
        _("phase2").style.display = "block";
        _("progressBar").value = 8.33;
        _("status").innerHTML = "I. Physical and Demographic Characteristics 2 of 2";
      } else {
          alert("Please fill in the fields");
      }
    }
    function processPhase2(){
      province = _("province").value; cm = _("cm").value; ps = _("ps").value; residential = _("residential").value; commercial = _("commercial").value; classification = _("classification").value; industrial = _("industrial").value; agricultural = _("agricultural").value; mineral = _("mineral").value; timberland = _("timbeerland").value; specialc = _("specialc").value; totalla = _("totalla").value; plain = _("plain").value; upland = _("upland").value; mountainous = _("mountainous").value; coastal = _("coastal").value; east = _("east").value; west = _("west").value; north = _("north").value; south = _("south").value; msl = _("msl").value; houshold = _("houshold").value; families = _("families").value; reference period 11 = _("reference period 11").value; source of data 11 = _("source of data 11").value; male 12 = _("male 12").value; female 12 = _("female 12").value; reference period 12 = _("reference period 12").value; source of data 12 = _("source of data 12").value; male 13a = _("male 13a").value; female 13a = _("female 13a").value; total 13a = _("total 13a").value; male 13b = _("male 13b").value; female 13b = _("female 13b").value; total 13b = _("total 13b").value; male 13c = _("male 13c").value; female 13c = _("female 13c").value; total 13c = _("total 13c").value; male 13d = _("male 13d").value; female 13d = _("female 13d").value; total 13d = _("total 13d").value; male 13e = _("male 13e").value; female 13e = _("female 13e").value; total 13e = _("total 13e").value male 13f = _("male 13f").value; female 13f = _("female 13f").value; total 13f = _("total 13f").value; male 13g = _("male 13g").value; female 13g = _("female 13g").value; total 13g = _("total 13g").value; male 14an = _("male 14an").value; female 14an = _("female 14an").value; total 14an = _("total 14an").value; male 14bnm = _("male 14bnm").value; female 14bnm = _("female 14bnm").value; total 14bnm = _("total 14bnm").value; male 14bns = _("male 14bns").value; female 14bns = _("female 14bns").value; total 14bns = _("total 14bns").value; male 14tnc = _("male 14tnc").value; female 14tnc = _("female 14tnc").value; total 14tnc = _("total 14tnc").value;
      if (province.length > 2 && cm.length > 2 && classification.length > 2 && ps.length > 2 && residential.length > 2 && commercial.length > 2 && industrial.length > 2 && agricultural.length > 2 && mineral.length > 2 && timberland.length > 2 && specialc.length > 2 && totalla.length > 2 && plain.length > 2 && upland.length > 2 && mountainous.length > 2 && coastal.length > 2 && east.length > 2 && west.length > 2 && north.length > 2 && south.length > 2 && msl.length > 2 && houshold.length > 2 && families.length > 2 && reference period 11.length > 2 && source of data 11.length > 2 && male 12.length > 2 && female 12.length > 2 && reference period 12.length > 2 && source of data 12.length > 2 && male 13a.length > 2 && female 13a.length > 2 && total 13a.length > 2 && male 13b.length > 2 && female 13b.length > 2 && total 13b.length > 2 && male 13c.length > 2 && female 13c.length > 2 && total 13c.length > 2 && male 13d.length > 2 && female 13d.length > 2 && total 13d.length > 2 && male 13e.length > 2 && female 13e.length > 2 && total 13e.length > 2 && male 13f.length > 2 && female 13f.length > 2 && total 13f.length > 2 && male 13g.length > 2 && female 13g.length > 2 && total 13g.length > 2 && male 14an.length > 2 && female 14an.length > 2 && total 14an.length > 2 && male 14bnm.length > 2 && female 14bnm.length > 2 && total 14bnm.length > 2 && male 14bns.length > 2 && female 14bns.length > 2 && total 14bns.length > 2 && male 14tnc.length > 2 && female 14tnc.length > 2 && total 14tnc.length > 2) {
        _("phase2").style.display = "none";
        _("show_all_data").style.display = "block";
        _("display_fname").innerHTML = fname;
        _("display_lname").innerHTML = lname;
        _("display_position").innerHTML = position;
        _("display_gender").innerHTML = gender;
        _("display_province").innerHTML = province;
        _("display_cm").innerHTML = cm;
        _("display_classification").innerHTML = classification;
        _("display_ps").innerHTML = ps;
        _("display_residential").innerHTML = residential;
        _("display_commercial").innerHTML = commercial;
        _("display_industrial").innerHTML = industrial;
        _("display_agricultural").innerHTML = agricultural;
        _("display_mineral").innerHTML = mineral;
        _("display_timberland").innerHTML = timberland;
        _("display_specialc").innerHTML = specialc;
        _("display_totalla").innerHTML = totalla;
        _("display_plain").innerHTML = plain;
        _("display_upland").innerHTML = upland;
        _("display_mountainous").innerHTML = mountainous;
        _("display_coastal").innerHTML = coastal;
        _("display_east").innerHTML = east;
        _("display_west").innerHTML = west;
        _("display_north").innerHTML = north;
        _("display_south").innerHTML = south;
        _("display_msl").innerHTML = msl;
        _("display_houshold").innerHTML = houshold;
        _("display_families").innerHTML = families;
        _("display_reference period 11").innerHTML = reference period 11;
        _("display_source of data 11").innerHTML = source of data 11;
        _("display_male 12").innerHTML = male 12;
        _("display_female 12").innerHTML = female 12;
        _("display_total 12").innerHTML = total 12;
        _("progressBar").value = 100;
        _("status").innerHTML = "Data Overview";
      } else {
          alert("Please fill in the fields");
      }
    }
    function submitForm(){
      _("multiphase").method = "post";
      _("multiphase").action = "my_parser.php";
      _("multiphase").submit();
    }