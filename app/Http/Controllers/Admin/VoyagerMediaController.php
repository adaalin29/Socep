<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Storage;
use Illuminate\Http\Request;
use League\Flysystem\Plugin\ListWith;
use TCG\Voyager\Http\Controllers\VoyagerMediaController as VoyagerMediaControllerOriginal;

class VoyagerMediaController extends VoyagerMediaControllerOriginal
{
    private $filesystem;
    private $directory = '';
    
    public function __construct()
    {
        $this->filesystem = config('voyager.storage.disk');
    }
    
    public function files(Request $request)
    {
        // Check permission
        $this->authorize('browse_media');
        $folder = $request->folder;
        if ($folder == '/') {
            $folder = '';
        }
        $dir = $this->directory.$folder;
        $files = [];
        $storage = Storage::disk($this->filesystem)->addPlugin(new ListWith());
        $storageItems = $storage->listWith(['mimetype'], $dir);
        foreach ($storageItems as $item) {
            if ($item['type'] == 'dir') {
                if ($item['path'] == 'thumb') {
                    continue;
                }
                if ($item['path'] == 'messages') {
                    continue;
                }
                if ($item['path'] == 'users') {
                    continue;
                }
                if ($item['path'] == 'settings') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'cars') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'Certificari PDF') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'certifications') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'directories') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'employees') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'jobs') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                if ($item['path'] == 'news') {
                    if (!$request->user()->hasPermission('browse_media_settings')) {
                        continue;
                    }
                }
                $files[] = [
                    'name'          => $item['basename'],
                    'type'          => 'folder',
                    'path'          => Storage::disk($this->filesystem)->url($item['path']),
                    'relative_path' => $item['path'],
                    'items'         => '',
                    'last_modified' => '',
                ];
            } else {
                if (empty(pathinfo($item['path'], PATHINFO_FILENAME)) && !config('voyager.hidden_files')) {
                    continue;
                }
                $files[] = [
                    'name'          => $item['basename'],
                    'type'          => $item['mimetype'] ?? 'file',
                    'path'          => Storage::disk($this->filesystem)->url($item['path']),
                    'relative_path' => $item['path'],
                    'size'          => $item['size'],
                    'last_modified' => $item['timestamp'],
                ];
            }
        }
        usort($files, function ($a, $b) {return $a['last_modified'] < $b['last_modified'];});
        return response()->json($files);
    }
}
