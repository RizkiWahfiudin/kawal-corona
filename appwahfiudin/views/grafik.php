<div class="container app-content">
	<div class="">
		<div class="row mt-4 mb-4">
			<canvas id="myChart"></canvas>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Coming Soon!</h5>
        Masih Dalam Tahap Pengembangan, Hehe 😂
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Oke, Saya Mengerti</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
	    // The type of chart we want to create
	    type: 'line',

	    // The data for our dataset
	    data: {
	        labels: ['Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember', 'Januari', 'Februari'],
	        datasets: [{
	            label: 'Kasus Harian Covid-19',
	            backgroundColor: 'rgb(255, 99, 132)',
	            borderColor: 'rgb(255, 99, 132)',
	            data: [0, 10, 5, 2, 20, 30, 45, 7, 24, 30, 10, 5]
	        }]
	    },

	    // Configuration options go here
	    options: {}
	});

	document.addEventListener("DOMContentLoaded", function(event) { 
        setTimeout(function() {
            $('#exampleModal').modal('show');
        },1000)
    });
</script>