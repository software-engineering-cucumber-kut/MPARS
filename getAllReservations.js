const getAllReservations = () => {
  $.ajax({
    type: 'GET',
    url: '/getAllReservations.php',
    datatype: 'json'
  }).done((res)) => {
     addAllReservations(JSON.parse(res));
  });
};

const addAllReservations = (data) => {
  let AllReservation = data.AllReservation;

  $.each(allreservations, (index, val) => {
    var card = val.received + val.reservationtime + receieveday + amount + reservationid;

    $('#').append(card);
  });
};
