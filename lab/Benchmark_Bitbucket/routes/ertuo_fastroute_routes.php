<?php

use Ertuo\Route;

return $routes = Route::add('', [])
->group(function()
{
    return array(

        'addon' => Route::add('', ['GET' => ['_route' => 'addon', ], ])
        ->group(function()
        {
            return array(

                'linkers' => Route::add('linker_key', ['GET' => ['_route' => 'addon_linkers', ], ])
                ->rule('any', [], ['GET' => ['_route' => 'addon_linkers_linker_key', ], ])
                ->group(function()
                {
                    return array(

                        '' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'values' => Route::add('value_id', ['GET' => ['_route' => 'addon_linkers_linker_key_values', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'addon_linkers_linker_key_values_value_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                    );

                }),

            );

        }),

        'hook_events' => Route::add('subject_type', ['GET' => ['_route' => 'hook_events', ], ])
        ->rule('any', [], ['GET' => ['_route' => 'hook_events_subject_type', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('', []),

            );

        }),

        'pullrequests' => Route::add('selected_user', [])
        ->rule('any', [], ['GET' => ['_route' => 'pullrequests_selected_user', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('', []),

            );

        }),

        'repositories' => Route::add('workspace', ['GET' => ['_route' => 'repositories', ], ])
        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('repo_slug', [])
                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug', ], ])
                ->group(function()
                {
                    return array(

                        '' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'branch-restrictions' => Route::add('id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_branch_restrictions', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'branching-model' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_branching_model', ], ])
                                ->group(function()
                                {
                                    return array(

                                        'settings' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_branching_model_settings', ], ]),

                                    );

                                }),

                                'commit' => Route::add('commit', [])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'approve' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_approve', ], ]),

                                                'comments' => Route::add('comment_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                                'properties' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('property_name', [])
                                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name', ], ])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', []),

                                                            );

                                                        }),

                                                    );

                                                }),

                                                'pullrequests' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests', ], ]),

                                                'reports' => Route::add('reportId', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', [])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                'annotations' => Route::add('annotationId', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations', ], ])
                                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId', ], ])
                                                                ->group(function()
                                                                {
                                                                    return array(

                                                                        '' => Route::add('', []),

                                                                    );

                                                                }),

                                                            );

                                                        }),

                                                    );

                                                }),

                                                'statuses' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'build' => Route::add('key', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build', ], ])
                                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key', ], ])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', []),

                                                            );

                                                        }),

                                                    );

                                                }),

                                            );

                                        }),

                                    );

                                }),

                                'commits' => Route::add('revision', ['GET' => ['_route' => 'repositories_workspace_repo_slug_commits', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_commits_revision', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'components' => Route::add('component_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_components', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_components_component_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'default-reviewers' => Route::add('target_username', ['GET' => ['_route' => 'repositories_workspace_repo_slug_default_reviewers', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'deploy-keys' => Route::add('key_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_deploy_keys', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'deployments' => Route::add('deployment_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_deployments', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'deployments_config' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        'environments' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'variables' => Route::add('variable_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables', ], ])
                                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid', ], ])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', []),

                                                            );

                                                        }),

                                                    );

                                                }),

                                            );

                                        }),

                                    );

                                }),

                                'diff' => Route::add('spec', [])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_diff_spec', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'diffstat' => Route::add('spec', [])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_diffstat_spec', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'downloads' => Route::add('filename', ['GET' => ['_route' => 'repositories_workspace_repo_slug_downloads', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_downloads_filename', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'environments' => Route::add('environment_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_environments', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'changes' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes', ], ]),

                                            );

                                        }),

                                    );

                                }),

                                'filehistory' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('path', [])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                    );

                                }),

                                'forks' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_forks', ], ]),

                                'hooks' => Route::add('uid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_hooks', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_hooks_uid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'issues' => Route::add('issue_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        'export' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_export', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '-issues-' => Route::add('', [])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', [])
                                                                ->group(function()
                                                                {
                                                                    return array(

                                                                        '.zip' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip', ], ]),

                                                                    );

                                                                }),

                                                            );

                                                        }),

                                                    );

                                                }),

                                            );

                                        }),

                                        'import' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_import', ], ]),

                                        '' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'attachments' => Route::add('path', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                                'changes' => Route::add('change_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                                'comments' => Route::add('comment_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                                'vote' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote', ], ]),

                                                'watch' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch', ], ]),

                                            );

                                        }),

                                    );

                                }),

                                'merge-base' => Route::add('revspec', [])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_merge_base_revspec', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'milestones' => Route::add('milestone_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_milestones', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'patch' => Route::add('spec', [])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_patch_spec', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'pipelines-config' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        'caches' => Route::add('cache_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches', ], ])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'content-uri' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri', ], ]),

                                                    );

                                                }),

                                            );

                                        }),

                                    );

                                }),

                                'pipelines' => Route::add('pipeline_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'steps' => Route::add('step_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', [])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                'log' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log', ], ]),

                                                                'logs' => Route::add('log_uuid', [])
                                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid', ], ])
                                                                ->group(function()
                                                                {
                                                                    return array(

                                                                        '' => Route::add('', []),

                                                                    );

                                                                }),

                                                                'test_reports' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports', ], ])
                                                                ->group(function()
                                                                {
                                                                    return array(

                                                                        'test_cases' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases', ], ])
                                                                        ->group(function()
                                                                        {
                                                                            return array(

                                                                                '' => Route::add('', [])
                                                                                ->group(function()
                                                                                {
                                                                                    return array(

                                                                                        'test_case_reasons' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons', ], ]),

                                                                                    );

                                                                                }),

                                                                            );

                                                                        }),

                                                                    );

                                                                }),

                                                            );

                                                        }),

                                                    );

                                                }),

                                                'stopPipeline' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline', ], ]),

                                            );

                                        }),

                                    );

                                }),

                                'pipelines_config' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config', ], ])
                                ->group(function()
                                {
                                    return array(

                                        'build_number' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number', ], ]),

                                        'schedules' => Route::add('schedule_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules', ], ])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'executions' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions', ], ]),

                                                    );

                                                }),

                                            );

                                        }),

                                        'ssh' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'key_pair' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair', ], ]),

                                                'known_hosts' => Route::add('known_host_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                            );

                                        }),

                                        'variables' => Route::add('variable_uuid', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables', ], ])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                    );

                                }),

                                'properties' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('property_name', [])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                    );

                                }),

                                'pullrequests' => Route::add('pull_request_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        'activity' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_activity', ], ]),

                                        '' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                'activity' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity', ], ]),

                                                'approve' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve', ], ]),

                                                'comments' => Route::add('comment_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments', ], ])
                                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('', []),

                                                    );

                                                }),

                                                'commits' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits', ], ]),

                                                'decline' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline', ], ]),

                                                'diff' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff', ], ]),

                                                'diffstat' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat', ], ]),

                                                'merge' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge', ], ])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'task-status' => Route::add('task_id', [])
                                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id', ], ])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', []),

                                                            );

                                                        }),

                                                    );

                                                }),

                                                'patch' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch', ], ]),

                                                'request-changes' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes', ], ]),

                                                'statuses' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses', ], ]),

                                                'properties' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        '' => Route::add('property_name', [])
                                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name', ], ])
                                                        ->group(function()
                                                        {
                                                            return array(

                                                                '' => Route::add('', []),

                                                            );

                                                        }),

                                                    );

                                                }),

                                            );

                                        }),

                                    );

                                }),

                                'refs' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_refs', ], ])
                                ->group(function()
                                {
                                    return array(

                                        'branches' => Route::add('name', ['GET' => ['_route' => 'repositories_workspace_repo_slug_refs_branches', ], ])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_refs_branches_name', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                        'tags' => Route::add('name', ['GET' => ['_route' => 'repositories_workspace_repo_slug_refs_tags', ], ])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_refs_tags_name', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                    );

                                }),

                                'src' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_src', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('path', [])
                                        ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_src_commit_path', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                    );

                                }),

                                'versions' => Route::add('version_id', ['GET' => ['_route' => 'repositories_workspace_repo_slug_versions', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'repositories_workspace_repo_slug_versions_version_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'watchers' => Route::add('', ['GET' => ['_route' => 'repositories_workspace_repo_slug_watchers', ], ]),

                            );

                        }),

                    );

                }),

            );

        }),

        'snippets' => Route::add('workspace', ['GET' => ['_route' => 'snippets', ], ])
        ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('encoded_id', [])
                ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id', ], ])
                ->group(function()
                {
                    return array(

                        '' => Route::add('node_id', [])
                        ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id_node_id', ], ])
                        ->group(function()
                        {
                            return array(

                                'comments' => Route::add('comment_id', ['GET' => ['_route' => 'snippets_workspace_encoded_id_comments', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id_comments_comment_id', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'commits' => Route::add('revision', ['GET' => ['_route' => 'snippets_workspace_encoded_id_commits', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id_commits_revision', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'files' => Route::add('path', [])
                                ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id_files_path', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                                'watch' => Route::add('', ['GET' => ['_route' => 'snippets_workspace_encoded_id_watch', ], ]),

                                'watchers' => Route::add('', ['GET' => ['_route' => 'snippets_workspace_encoded_id_watchers', ], ]),

                                '' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        'files' => Route::add('path', [])
                                        ->rule('any', [], ['GET' => ['_route' => 'snippets_workspace_encoded_id_node_id_files_path', ], ])
                                        ->group(function()
                                        {
                                            return array(

                                                '' => Route::add('', []),

                                            );

                                        }),

                                        'diff' => Route::add('', ['GET' => ['_route' => 'snippets_workspace_encoded_id_revision_diff', ], ]),

                                        'patch' => Route::add('', ['GET' => ['_route' => 'snippets_workspace_encoded_id_revision_patch', ], ]),

                                    );

                                }),

                            );

                        }),

                    );

                }),

            );

        }),

        'teams' => Route::add('username', ['GET' => ['_route' => 'teams', ], ])
        ->rule('any', [], ['GET' => ['_route' => 'teams_username', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('', [])
                ->group(function()
                {
                    return array(

                        'followers' => Route::add('', ['GET' => ['_route' => 'teams_username_followers', ], ]),

                        'following' => Route::add('', ['GET' => ['_route' => 'teams_username_following', ], ]),

                        'hooks' => Route::add('uid', ['GET' => ['_route' => 'teams_username_hooks', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'teams_username_hooks_uid', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'members' => Route::add('', ['GET' => ['_route' => 'teams_username_members', ], ]),

                        'permissions' => Route::add('', ['GET' => ['_route' => 'teams_username_permissions', ], ])
                        ->group(function()
                        {
                            return array(

                                'repositories' => Route::add('repo_slug', ['GET' => ['_route' => 'teams_username_permissions_repositories', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'teams_username_permissions_repositories_repo_slug', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'pipelines_config' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'variables' => Route::add('variable_uuid', ['GET' => ['_route' => 'teams_username_pipelines_config_variables', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'teams_username_pipelines_config_variables_variable_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'projects' => Route::add('project_key', ['GET' => ['_route' => 'teams_username_projects', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'teams_username_projects_project_key', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'search' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'code' => Route::add('', ['GET' => ['_route' => 'teams_username_search_code', ], ]),

                            );

                        }),

                        'repositories' => Route::add('', ['GET' => ['_route' => 'teams_workspace_repositories', ], ]),

                    );

                }),

            );

        }),

        'user' => Route::add('', ['GET' => ['_route' => 'user', ], ])
        ->group(function()
        {
            return array(

                'emails' => Route::add('email', ['GET' => ['_route' => 'user_emails', ], ])
                ->rule('any', [], ['GET' => ['_route' => 'user_emails_email', ], ])
                ->group(function()
                {
                    return array(

                        '' => Route::add('', []),

                    );

                }),

                'permissions' => Route::add('', [])
                ->group(function()
                {
                    return array(

                        'repositories' => Route::add('', ['GET' => ['_route' => 'user_permissions_repositories', ], ]),

                        'teams' => Route::add('', ['GET' => ['_route' => 'user_permissions_teams', ], ]),

                        'workspaces' => Route::add('', ['GET' => ['_route' => 'user_permissions_workspaces', ], ]),

                    );

                }),

            );

        }),

        'users' => Route::add('selected_user', [])
        ->rule('any', [], ['GET' => ['_route' => 'users_selected_user', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('', [])
                ->group(function()
                {
                    return array(

                        'hooks' => Route::add('uid', ['GET' => ['_route' => 'users_selected_user_hooks', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'users_selected_user_hooks_uid', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'pipelines_config' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'variables' => Route::add('variable_uuid', ['GET' => ['_route' => 'users_selected_user_pipelines_config_variables', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'properties' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('property_name', [])
                                ->rule('any', [], ['GET' => ['_route' => 'users_selected_user_properties_app_key_property_name', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'search' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'code' => Route::add('', ['GET' => ['_route' => 'users_selected_user_search_code', ], ]),

                            );

                        }),

                        'ssh-keys' => Route::add('key_id', ['GET' => ['_route' => 'users_selected_user_ssh_keys', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'users_selected_user_ssh_keys_key_id', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'members' => Route::add('', ['GET' => ['_route' => 'users_username_members', ], ]),

                        'repositories' => Route::add('', ['GET' => ['_route' => 'users_workspace_repositories', ], ]),

                    );

                }),

            );

        }),

        'workspaces' => Route::add('workspace', ['GET' => ['_route' => 'workspaces', ], ])
        ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace', ], ])
        ->group(function()
        {
            return array(

                '' => Route::add('', [])
                ->group(function()
                {
                    return array(

                        'hooks' => Route::add('uid', ['GET' => ['_route' => 'workspaces_workspace_hooks', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace_hooks_uid', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'members' => Route::add('member', ['GET' => ['_route' => 'workspaces_workspace_members', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace_members_member', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'permissions' => Route::add('', ['GET' => ['_route' => 'workspaces_workspace_permissions', ], ])
                        ->group(function()
                        {
                            return array(

                                'repositories' => Route::add('repo_slug', ['GET' => ['_route' => 'workspaces_workspace_permissions_repositories', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace_permissions_repositories_repo_slug', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'pipelines-config' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'identity' => Route::add('', [])
                                ->group(function()
                                {
                                    return array(

                                        'oidc' => Route::add('', [])
                                        ->group(function()
                                        {
                                            return array(

                                                '.well-known' => Route::add('', [])
                                                ->group(function()
                                                {
                                                    return array(

                                                        'openid-configuration' => Route::add('', ['GET' => ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration', ], ]),

                                                    );

                                                }),

                                                'keys.json' => Route::add('', ['GET' => ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json', ], ]),

                                            );

                                        }),

                                    );

                                }),

                                'variables' => Route::add('variable_uuid', ['GET' => ['_route' => 'workspaces_workspace_pipelines_config_variables', ], ])
                                ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid', ], ])
                                ->group(function()
                                {
                                    return array(

                                        '' => Route::add('', []),

                                    );

                                }),

                            );

                        }),

                        'projects' => Route::add('project_key', ['GET' => ['_route' => 'workspaces_workspace_projects', ], ])
                        ->rule('any', [], ['GET' => ['_route' => 'workspaces_workspace_projects_project_key', ], ])
                        ->group(function()
                        {
                            return array(

                                '' => Route::add('', []),

                            );

                        }),

                        'search' => Route::add('', [])
                        ->group(function()
                        {
                            return array(

                                'code' => Route::add('', ['GET' => ['_route' => 'workspaces_workspace_search_code', ], ]),

                            );

                        }),

                    );

                }),

            );

        }),

    );

});
