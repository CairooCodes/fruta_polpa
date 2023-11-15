function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: {
      lat: -5.108008158202379, 
      lng: -42.80315442769431
    },
  });

  const beaches = [{
    title: "Amapá",
    subtitle: "Macapá",
    lat: 0.03333222218763959, 
    lng: -51.05875487113462,
    zIndex: 7,
  },
  {
    title: "Tocantins",
    subtitle: "Palmas",
    lat: -10.210654782220395, 
    lng: -48.347654368646275,
    zIndex: 7,
  },
  {
    title: "Ceará",
    subtitle: "Fortaleza",
    lat: -3.7417854234616774, 
    lng: -38.53410767638784,
    zIndex: 7,
  },
  {
    title: "Ferreira Supermercado",
    subtitle: "Mocambinho",
    lat: -5.034778534967954, 
    lng: -42.815536809270405,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Água Mineral",
    lat: -5.040974972360488,
    lng: -42.806256130426945,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "São Joaquim",
    lat: -5.054967625472834,
    lng: -42.83180505035021,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Lourival Parente",
    lat: -5.134641564158117,
    lng: -42.78606844662261,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Centro",
    lat: -5.094161706120114,
    lng: -42.81506593557748,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Parque Piauí",
    lat: -5.143439321617508,
    lng: -42.79035188220457,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Dirceu I",
    lat: -5.0991656334854465,
    lng: -42.756399299995536,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Irmã Dulce",
    lat: -5.1927203439955125,
    lng: -42.76829987115497,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Renascença",
    lat: -5.098024649405336,
    lng: -42.7422739932497,
    zIndex: 7,
  },
  { 
    title: "Ferreira Supermercado",
    subtitle: "Porto Alegre",
    lat: -5.189712930552912,
    lng: -42.75690818624288,
    zIndex: 7,
  },
  { 
    title: "Mix Mateus",
    subtitle: "Saci",
    lat: -5.136852709648776,
    lng: -42.79647050963811,
    zIndex: 7,
  },
  { 
    title: "Mix Mateus",
    subtitle: "Timon - Parque Alvorada",
    lat: -5.125482792193995,
    lng: -42.82385793555419,
    zIndex: 7,
  },
  { 
    title: "Mix Mateus",
    subtitle: "Timon - AV. Piauí",
    lat: -5.092686808658724,
    lng: -42.8237657533308,
    zIndex: 7,
  }, 
  {
    title: "Mix Mateus",
    subtitle: "Uruguai",
    lat: -5.065407217508004,
    lng: -42.74752212176295,
    zIndex: 7,
  },
  {
    title: "Pão de Açucar",
    subtitle: "Centro",
    lat: -5.089702976479478,
    lng: -42.80919472757024,
    zIndex: 7,
  },
  {
    title: "Pão de Açucar",
    subtitle: "São Cristovão",
    lat: -5.080140189330273, 
    lng: -42.78082152344377,
    zIndex: 7,
  }, 
  {
    title: "Pão de Açucar",
    subtitle: "Jóquei",
    lat: -5.074209417030925, 
    lng: -42.79177177268097,
    zIndex: 7,
  },
  {
    title: "Pão de Açucar",
    subtitle: "Jóquei Av. Homero",
    lat: -5.069400345695172,
    lng: -42.78354329643753,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Marquês",
    lat: -5.075009187241926, 
    lng: -42.821089446023,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "São João",
    lat: -5.08730549103461, 
    lng: -42.77509565729836,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Piçarra",
    lat: -5.096818507831636, 
    lng: -42.79656302916781,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Pirajá",
    lat: -5.0750079673249875, 
    lng: -42.821097835895024,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Pirajá - Av. Maranhão",
    lat: -5.084079388837235, 
    lng: -42.82521506988222,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Mafuá",
    lat: -5.08015455643065, 
    lng: -42.81574894973821,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Horto - Av. Pres. Kennedy",
    lat: -5.0635839189819105,
    lng: -42.77046952052025,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Mocambinho",
    lat: -5.034354593504984, 
    lng: -42.81437266222052,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Planalto Uruguai",
    lat: -5.056562158500408, 
    lng: -42.74903448212885,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Barão",
    lat: -5.120237204334057, 
    lng: -42.80362162782767,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Parque Ideal",
    lat: -5.106733176658065,
    lng: -42.74984669848253,
    zIndex: 7,
  }, 
  {
    title: "R Carvalho",
    subtitle: "Timon - Parque Piauí",
    lat: -5.094485134962029, 
    lng: -42.83704972810262,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Lourival Parente",
    lat: -5.1398243286427485, 
    lng: -42.790129820499075,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Pedra Mole",
    lat: -5.018387501800604, 
    lng: -42.78036941210964,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Timon - Ceasa",
    lat: -5.087159423544101, 
    lng: -42.837390493322225,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Morada Nova",
    lat: -5.1276212632896945, 
    lng: -42.786699765142686,
    zIndex: 7,
  },
  {
    title: "R Carvalho",
    subtitle: "Timon - Parque Alvorada",
    lat: -5.128982199502868,
    lng: -42.827201034331225,
    zIndex: 7,
  }, 
  {
    title: "Veneza Supermercado",
    subtitle: "Guará",
    lat: -15.829178041547511,
    lng: -47.97480647573922,
    zIndex: 7,
  },
  {
    title: "Veneza Supermercado",
    subtitle: "Ceilândia",
    lat: -15.797743242886256, 
    lng: -48.12453287250177,
    zIndex: 7,
  },
  {
    title: "Veneza Supermercado",
    subtitle: "Taguatinga",
    lat: -15.822237379507142, 
    lng: -48.08124868649937,
    zIndex: 7,
  },
  {
    title: "Carro Chefe Supermercados",
    subtitle: "Marabá - Novo Horizonte",
    lat: -5.373431835196308, 
    lng: -49.11651460778127,
    zIndex: 7,
  },
  {
    title: "Carro Chefe Supermercados",
    subtitle: "Parauapebas - Porto Seguro",
    lat: -6.057185005073385, 
    lng: -49.89889923408473,
    zIndex: 7,
  },
  {
    title: "Carro Chefe Supermercados",
    subtitle: "Parauapebas - Beira Rio",
    lat: -6.079154949886259, 
    lng: -49.883919683204645,
    zIndex: 7,
  },
  ];


  for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];
    const marker = new google.maps.Marker({
      position: {
        lat: beach.lat,
        lng: beach.lng
      },
      map,
      icon: {
        url: "./assets/img/mapicon.png",
        scaledSize: new google.maps.Size(32, 32), // Ajuste o tamanho conforme necessário
      },
      title: beach.title,
      zIndex: beach.zIndex,
    });

    const infowindow = new google.maps.InfoWindow({
      content: `<h3>${beach.title}</h3><p>${beach.subtitle}</p>`,
    });

    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  }
}

window.initMap = initMap;