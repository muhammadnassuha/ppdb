<?php $__env->startPush('styles'); ?>
    <style>
        tbody tr:hover {
            background-color: #f9f9f9;
            transition: background-color 0.2s ease-in-out;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <h3 class="mb-4 fw-bold">Data Pendaftar</h3>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-white" style="background-color: #198754;">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td><?php echo e($row->nama); ?></td>
                                <td><?php echo e($row->nisn); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y')); ?></td>
                                <td>
                                    <?php
                                        $status = strtolower($row->status_siswa);
                                    ?>

                                    <?php if($status == 'terima'): ?>
                                        <span class="badge bg-success">
                                            <i class="bi bi-check-circle me-1"></i> Diterima
                                        </span>
                                    <?php elseif($status == 'tidak terima'): ?>
                                        <span class="badge bg-danger">
                                            <i class="bi bi-x-circle me-1"></i> Tidak Diterima
                                        </span>
                                    <?php elseif($status == 'draf'): ?>
                                        <span class="badge bg-warning text-dark">
                                            <i class="bi bi-pencil-fill me-1"></i> Draf
                                        </span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Tidak diketahui</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('admin.pendaftar.detail', $row->id)); ?>"
                                        class="btn btn-sm btn-primary me-1">
                                        <i class="bi bi-eye-fill me-1"></i> Detail
                                    </a>
                                    <form action="<?php echo e(route('admin.pendaftar.delete', $row->id)); ?>" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash-fill me-1"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($data->isEmpty()): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data pendaftar.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ppdb\resources\views/admin/pendaftar.blade.php ENDPATH**/ ?>