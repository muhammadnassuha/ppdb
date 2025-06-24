<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="mb-4">Manajemen Berita</h2>

    <a href="<?php echo e(route('admin.berita.create')); ?>" class="btn btn-success mb-3">+ Tambah Berita</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Isi (Singkat)</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration + ($beritas->currentPage() - 1) * $beritas->perPage()); ?></td>
                    <td><?php echo e($berita->judul); ?></td>
                    <td style="max-width: 100px;">
                        <?php if($berita->gambar): ?>
                            <img src="<?php echo e(Storage::url($berita->gambar)); ?>" alt="<?php echo e($berita->judul); ?>" class="img-fluid" style="max-height: 80px;">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e(Str::limit(strip_tags($berita->isi), 80)); ?></td>
                    <td><?php echo e($berita->created_at->format('d M Y')); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.berita.edit', $berita)); ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
                        <form action="<?php echo e(route('admin.berita.destroy', $berita)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Belum ada berita yang ditambahkan.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <?php echo e($beritas->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/admin/berita.blade.php ENDPATH**/ ?>