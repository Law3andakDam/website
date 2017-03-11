require 'rails_helper'

RSpec.describe BloodType, type: :model do
  it { should validate_presence_of(:name) }
  it { should have_many(:doners) }
  it { should have_many(:cases) }
end
