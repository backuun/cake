const daysIndonesianPickup = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const monthsIndonesianPickup = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $('#iso-input-pickup').datetimepicker({
        footer: true,
        modal: true,
        format: 'yyyy-mm-dd HH:MM',
        change: function (e) {
            const selectedDateTime = $('#iso-input-pickup').val();
            const datePickup = new Date(selectedDateTime);

            // Pastikan `date` valid sebelum memformat
            if (!isNaN(datePickup.getTime())) {
                const dayName = daysIndonesianPickup[datePickup.getDay()];
                const monthName = monthsIndonesianPickup[datePickup.getMonth()];
                const formattedDateTimePickup = `${dayName}, ${datePickup.getDate()} ${monthName} ${datePickup.getFullYear()} - ${String(datePickup.getHours()).padStart(2, '0')}:${String(datePickup.getMinutes()).padStart(2, '0')} WIB`;

                // Set the formatted date in the poppins input
                $('#poppins-pickup').val(formattedDateTimePickup);
            }
        }
    });

    // Buka kalender ketika input poppins diklik
    $('#poppins-pickup').on('click', function () {
        $('#iso-input-pickup').datetimepicker('open');
    });