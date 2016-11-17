require 'swagger/diff'
require 'json/ext'
diff = Swagger::Diff::Diff.new("staging_swagger.json", "develop_swagger.json")
puts diff.changes.to_json