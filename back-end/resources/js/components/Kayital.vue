<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Kayit Aldi
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        console.log('Component mounted.');

        // API çağrısını sayfa yüklendikten sonra yapıyoruz.
        axios.post('http://127.0.0.1:8000/api/upload', {
    message: 'Sayfa yüklendikten sonra API çağrısı yapıldı.'
})

        .then(response => {
            console.log('API çağrısı başarılı:', response.data);
        })
        .catch(error => {
            console.error('API çağrısı hatası:', error);
        });
    }
}
</script>
