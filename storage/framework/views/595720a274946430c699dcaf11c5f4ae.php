<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Tambah Berita Baru</h2>

    <form action="<?php echo e(route('admin.pengumuman.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="isi" class="form-label">Teks Pengumuman</label>
            <textarea class="form-control" name="isi" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo e(route('admin.pengumuman.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/admin/create.blade.php ENDPATH**/ ?>